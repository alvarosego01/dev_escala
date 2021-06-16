<?php

namespace App\Controllers;

use Sober\Controller\Controller;


class SetComponents extends Controller
{



    public function setAllComponents(){


        $components = array_merge(
            $this->setHeadersComponents(),
            $this->setContainComponents()
        );


        return $components;

    }


    private function setHeadersComponents(){

        return array(
            'components.headers.component-header-T1' => 'header_t1'
        );


    }
    private function setContainComponents(){

        return array(
            'components.contain.am.component-info-am-T1' => 'contain_am_T1'
        );


    }

}
