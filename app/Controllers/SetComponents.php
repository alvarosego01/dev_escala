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
            $this->setContainComponents(),
            $this->setBlogComponents()
        );


        return $components;

    }


    private function setBannersForms7Components(){

        return array(
            'components.bannerForms7.component-banner-forms7-T1' => 'bannerForms7_T1'
        );


    }


    private function setBlogComponents(){

        return array(
            'components.subscribers.component-subscribers-T1' => 'subscribers_T1',
            'components.blog.component-blog-slideshow-T1' => 'slideshowBlog_T1',
            'components.blog.component-blog-articles-T1' => 'articlesBlog_T1'
        );


    }



    private function setCallToActionsComponents(){

        return array(
            'components.callToActions.component-callToAction-T1' => 'callToAction_T1',
            'components.callToActions.component-callToAction-T2' => 'callToAction_T2',
            'components.callToActions.component-callToAction-T3' => 'callToAction_T3'
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
            'components.contain.info.component-info-4steps-loading' => 'contain_4steps_loading',
            'components.contain.info.component-info-text-image-T1' => 'contain_text_image_T1',
            'components.contain.info.component-info-multiple-cards-T1' => 'contain_multiple_cards_T1'
        );


    }

}
