(function () {
    'use strict';

    var root = document.getElementById('crmSegurosPricing');
    if (!root) {
        return;
    }

    var MODE = 'an';
    var PLAN = 'pro';
    var M = { otto: false, wa: false, multi: false };
    var SEG = true;

    var P = {
        an: { core: 99, pro: 139, otto: 39, wa: 19, multi: 49 },
        me: { core: 124, pro: 174, otto: 49, wa: 24, multi: 61 }
    };
    var ANN = { core: 1188, pro: 1668, otto: 468, wa: 228, multi: 588 };
    var INC = { users: 2, pol: 2500, cont: 2000, mail: 5000, auto: 500 };
    var MODINC = { otto: 10000, wa: 5000 };

    function byId(id) {
        return root.querySelector('#' + id);
    }

    function n(x) {
        return x.toLocaleString('en-US');
    }

    function money(x) {
        return '$' + Math.round(x).toLocaleString('en-US');
    }

    function up(a, b) {
        return Math.max(0, a - b);
    }

    function setVal(id, v) {
        var el = byId(id);
        if (el && document.activeElement !== el) {
            el.value = n(v);
        }
    }

    function setMode(mo) {
        MODE = mo;
        byId('csp-bAn').classList.toggle('on', mo === 'an');
        byId('csp-bMe').classList.toggle('on', mo === 'me');
        root.querySelectorAll('[data-an]').forEach(function (el) {
            el.textContent = mo === 'an' ? el.getAttribute('data-an') : el.getAttribute('data-me');
        });
        sync();
    }

    function setPlan(p) {
        PLAN = p;
        sync();
    }

    function toggleMod(k) {
        if (PLAN === 'pro' && (k === 'otto' || k === 'wa')) {
            return;
        }
        M[k] = !M[k];
        sync();
    }

    function sync() {
        var pr = P[MODE];
        byId('csp-pCore').classList.toggle('on', PLAN === 'core');
        byId('csp-pPro').classList.toggle('on', PLAN === 'pro');
        byId('csp-pCore').textContent = 'Independiente · ' + money(pr.core) + '/mes';
        byId('csp-pPro').textContent = 'Profesional · ' + money(pr.pro) + '/mes';

        var onOtto = PLAN === 'pro' || M.otto;
        var onWa = PLAN === 'pro' || M.wa;

        function chip(id, on, lock, pxId, price) {
            var c = byId(id);
            if (!c) {
                return;
            }
            c.classList.toggle('on', on && !lock);
            c.classList.toggle('lock', lock);
            byId(pxId).textContent = lock ? 'incluido' : '+' + money(price);
        }

        chip('csp-cOtto', onOtto, PLAN === 'pro', 'csp-pxOtto', pr.otto);
        chip('csp-cWa', onWa, PLAN === 'pro', 'csp-pxWa', pr.wa);
        chip('csp-cMulti', M.multi, false, 'csp-pxMulti', pr.multi);

        byId('csp-fOtto').classList.toggle('off', !onOtto);
        byId('csp-fWa').classList.toggle('off', !onWa);
        byId('csp-incOtto').textContent = onOtto ? '10,000 incluidos' : 'activa el módulo';
        byId('csp-incWa').textContent = onWa ? '5,000 incluidos' : 'activa el módulo';

        if (!onOtto) {
            byId('csp-rOtto').value = 0;
        } else if (+byId('csp-rOtto').value === 0) {
            byId('csp-rOtto').value = MODINC.otto;
        }
        if (!onWa) {
            byId('csp-rWa').value = 0;
        } else if (+byId('csp-rWa').value === 0) {
            byId('csp-rWa').value = MODINC.wa;
        }

        byId('csp-calcTtl').textContent = MODE === 'an'
            ? 'TU ESTIMADO MENSUAL · PAGO ANUAL'
            : 'TU ESTIMADO MENSUAL · MES A MES';
        calc();
    }

    function calc() {
        var pr = P[MODE];
        var users = +byId('csp-rUsers').value;
        var pol = SEG ? +byId('csp-rPol').value : 0;
        var cont = +byId('csp-rCont').value;
        var mail = +byId('csp-rMail').value;
        var auto = +byId('csp-rAuto').value;
        var wa = +byId('csp-rWa').value;
        var otto = +byId('csp-rOtto').value;

        setVal('csp-vUsers', users);
        if (SEG) {
            setVal('csp-vPol', pol);
        }
        setVal('csp-vCont', cont);
        setVal('csp-vMail', mail);
        setVal('csp-vAuto', auto);
        setVal('csp-vWa', wa);
        setVal('csp-vOtto', otto);

        var onOtto = PLAN === 'pro' || M.otto;
        var onWa = PLAN === 'pro' || M.wa;
        var lines = [];
        var total = pr[PLAN];
        var ann = ANN[PLAN];

        lines.push(['Plan ' + (PLAN === 'pro' ? 'Profesional' : 'Independiente'), total, 'base']);

        if (PLAN === 'core' && M.otto) {
            total += pr.otto;
            ann += ANN.otto;
            lines.push(['Módulo Otto IA', pr.otto, '']);
        }
        if (PLAN === 'core' && M.wa) {
            total += pr.wa;
            ann += ANN.wa;
            lines.push(['Módulo WhatsApp', pr.wa, '']);
        }
        if (M.multi) {
            total += pr.multi;
            ann += ANN.multi;
            lines.push(['Módulo Multi-Aseguradora', pr.multi, '']);
        }

        var extra;
        var extraUsers = up(users, INC.users);
        extra = extraUsers * 25;
        if (extra) {
            lines.push([extraUsers + (extraUsers === 1 ? ' usuario adicional' : ' usuarios adicionales'), extra, '']);
            total += extra;
            ann += extra * 12;
        }

        if (SEG) {
            var extraPol = up(pol, INC.pol);
            extra = Math.min(Math.ceil(extraPol / 500) * 10, 150);
            if (extra) {
                lines.push([n(extraPol) + ' pólizas adicionales', extra, extra >= 150 ? 'tope alcanzado' : '']);
                total += extra;
                ann += extra * 12;
            }
        }

        extra = Math.ceil(up(cont, INC.cont) / 1000) * 5;
        if (extra) {
            lines.push([n(up(cont, INC.cont)) + ' contactos adicionales', extra, '']);
            total += extra;
            ann += extra * 12;
        }

        extra = Math.ceil(up(mail, INC.mail) / 1000) * 1;
        if (extra) {
            lines.push([n(up(mail, INC.mail)) + ' emails adicionales', extra, '']);
            total += extra;
            ann += extra * 12;
        }

        extra = Math.ceil(up(auto, INC.auto) / 1000) * 10;
        if (extra) {
            lines.push([n(up(auto, INC.auto)) + ' automatizaciones adicionales', extra, '']);
            total += extra;
            ann += extra * 12;
        }

        var extraWa = up(wa, onWa ? MODINC.wa : 0);
        extra = extraWa * 0.008;
        if (extra) {
            lines.push([n(extraWa) + ' mensajes adicionales', extra, '']);
            total += extra;
            ann += extra * 12;
        }

        extra = Math.ceil(up(otto, onOtto ? MODINC.otto : 0) / 50000) * 60;
        if (extra) {
            lines.push([n(up(otto, MODINC.otto)) + ' créditos adicionales', extra, '']);
            total += extra;
            ann += extra * 12;
        }

        var html = '';
        lines.forEach(function (row, i) {
            html += '<div class="csp-ln' + (i === 0 ? ' base' : '') + '"><span>' + row[0] +
                (row[2] && row[2] !== 'base' ? ' <span class="csp-ln-note">· ' + row[2] + '</span>' : '') +
                '</span><b>' + money(row[1]) + '</b></div>';
        });
        byId('csp-lines').innerHTML = html;
        byId('csp-total').innerHTML = money(total) + '<span> USD</span>';
        byId('csp-yearly').textContent = MODE === 'an'
            ? money(ann) + ' al año, facturado anualmente'
            : money(total * 12) + ' al año pagando mes a mes · ' + money(total * 12 - ann) + ' más que el plan anual';

        var nudge = byId('csp-nudge');
        if (PLAN === 'core' && M.otto && M.wa) {
            nudge.textContent = 'Con Otto IA y WhatsApp activos, el plan Profesional te sale ' +
                money(pr.core + pr.otto + pr.wa - pr.pro) + ' más barato al mes. Cámbialo arriba.';
            nudge.classList.add('show');
        } else {
            nudge.classList.remove('show');
        }
    }

    root.querySelector('#csp-bAn').addEventListener('click', function () { setMode('an'); });
    root.querySelector('#csp-bMe').addEventListener('click', function () { setMode('me'); });
    root.querySelector('#csp-pCore').addEventListener('click', function () { setPlan('core'); });
    root.querySelector('#csp-pPro').addEventListener('click', function () { setPlan('pro'); });
    root.querySelector('#csp-cOtto').addEventListener('click', function () { toggleMod('otto'); });
    root.querySelector('#csp-cWa').addEventListener('click', function () { toggleMod('wa'); });
    root.querySelector('#csp-cMulti').addEventListener('click', function () { toggleMod('multi'); });

    root.querySelectorAll('input[type=range]').forEach(function (range) {
        range.addEventListener('input', calc);
    });

    root.querySelectorAll('input.csp-val').forEach(function (inp) {
        inp.addEventListener('input', function () {
            var range = byId(this.getAttribute('data-r'));
            if (!range) {
                return;
            }
            var v = parseInt(String(this.value).replace(/[^0-9]/g, ''), 10);
            if (isNaN(v)) {
                v = 0;
            }
            range.value = Math.max(+range.min, Math.min(+range.max, v));
            calc();
        });
        inp.addEventListener('blur', calc);
    });

    sync();
})();
