<?php

namespace App\Controllers;

use Sober\Controller\Controller;


class SetComponents extends Controller
{



    public function setAllComponents(){


        $components = array_merge(
            $this->setBannersForms7Components(),
            $this->setHeadersComponents(),
            $this->setCallToActionsComponents(),
            $this->setContainComponents()
        );


        return $components;

    }


    private function setBannersForms7Components(){

        return array(
            'components.bannerForms7.component-banner-forms7-T1' => 'bannerForms7_T1'
        );


    }

    private function setCallToActionsComponents(){

        return array(
            'components.callToActions.component-callToAction-T1' => 'callToAction_T1'
        );


    }

    private function setHeadersComponents(){

        return array(
            'components.headers.component-header-T1' => 'header_t1'
        );


    }
    private function setContainComponents(){

        return array(
            'components.contain.am.component-info-am-T1' => 'contain_am_T1',
            'components.contain.info.component-info-aio-5steps' => 'contain_aio5',
            'components.contain.info.component-info-4steps-loading' => 'contain_4steps_loading'
        );


    }

}
