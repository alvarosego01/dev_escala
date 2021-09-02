<?php

namespace App\Controllers;

use Sober\Controller\Controller;


class SetComponents extends Controller
{



    public function setAllComponents()
    {


        $components = array_merge(
            $this->setBannersForms7Components(),
            $this->setHeadersComponents(),
            $this->setCallToActionsComponents(),
            $this->setContainComponents(),
            $this->setBlogComponents(),
            $this->setNavbarsComponents()
        );


        return $components;
    }


    private function setBannersForms7Components()
    {

        return array(
            'components.bannerForms7.component-banner-forms7-T1' => 'bannerForms7_T1'
        );
    }


    private function setBlogComponents()
    {

        return array(
            'components.subscribers.component-subscribers-T1' => 'subscribers_T1',
            'components.blog.component-blog-slideshow-T1' => 'slideshowBlog_T1',
            'components.blog.component-blog-articles-T1' => 'articlesBlog_T1'
        );
    }



    private function setCallToActionsComponents()
    {

        return array(
            'components.callToActions.component-callToAction-T1' => 'callToAction_T1',
            'components.callToActions.component-callToAction-T2' => 'callToAction_T2',
            'components.callToActions.component-callToAction-T3' => 'callToAction_T3'
        );
    }

    private function setHeadersComponents()
    {

        return array(
            'components.headers.component-header-T1' => 'header_t1',
            'components.headers.component-header-T2' => 'header_small_t2'
        );
    }

    private function setContainComponents()
    {

        return array(
            'components.contain.pricing.component-pricing-price-card-T1' => 'pricing_card_T1',
            'components.contain.am.component-info-am-T1' => 'contain_am_T1',
            'components.contain.info.component-info-aio-5steps' => 'contain_aio5',
            'components.contain.info.component-info-4steps-loading' => 'contain_4steps_loading',
            'components.contain.info.component-info-text-image-T1' => 'contain_text_image_T1',
            'components.contain.info.component-info-FAQ-T1' => 'contain_FAQ_T1',
            'components.contain.info.component-info-accordion-T1' => 'contain_accordion_T1',
            'components.contain.info.component-info-multiple-cards-T1' => 'contain_multiple_cards_T1'
        );
    }


    public function setNavbarsComponents()
    {


        return array(
            'components.navBar.component-navbar-default-T1' => 'navBar_default_T1',
            'components.navBar.component-navbar-default-T2' => 'navBar_default_T2',
            'components.navBar.component-navbar-blog-T1' => 'navBar_blog_T1',
            'components.navBar.component-navbar-landing-smalll.T1' => 'navBar_landing_small_T1',
            'components.navBar.component-navbar-landing-logo' => 'navBar_landing_logo_T1'
        );
    }

    public static function setTemplates($type)
    {


        if ($type == 'webinar') {
            return array(
                "views/template-open-webinar-escala.blade.php",
                "views/template-open-webinar-escala-meeting.blade.php",
            );
        }

        if ($type == 'zoom') {

            return array(

                "views/template-zoom-demo-meeting.blade.php",
                "views/template-zoom-demo-home.blade.php",
                "views/template-zoom-demo-home-landing.blade.php",
                "views/template-zoom-demo-home-step1.blade.php",
                "views/template-zoom-demo-home-step2.blade.php"

            );

        }


        if ($type == 'func') {
            return array(

                "views/template-func-page-builder.blade.php",
                "views/template-func-analiticas.blade.php",
                "views/template-func-automatization.blade.php",
                "views/template-func-crm-escala.blade.php",
                "views/template-func-email.blade.php",
                "views/template-func-digital-announces.blade.php",

            );
        }

        if ($type == 'blog') {
            return array(

                "views/template-blog-home.blade.php",
                "views/template-blog-category.blade.php",
                "views/single-post.blade.php"

            );
        }

        if ($type == 'landings') {
            return array(

                "views/template-landing-incredible.blade.php",
                "views/template-landing-pricing-page.blade.php",
                "views/template-landing-incredible-demo.blade.php",
                "views/template-landing-whatsapp.blade.php",
                "views/template-landing-correos-masivos.blade.php",
                "views/template-landing-incredible-no-program.blade.php",
                "views/template-landing-incredible-am.blade.php",

            );
        }

        if ($type == 'singles') {
            return array(

                "views/template-home.blade.php",
                "views/template-escala-fex.blade.php",

            );
        }

        if ($type == 'all') {

            return array(

                "views/template-home.blade.php",
                "views/template-landing-incredible.blade.php",
                "views/template-landing-incredible-demo.blade.php",
                "views/template-landing-whatsapp.blade.php",
                "views/template-landing-correos-masivos.blade.php",
                "views/template-landing-incredible-no-program.blade.php",
                "views/template-landing-incredible-am.blade.php",
                "views/template-func-page-builder.blade.php",
                "views/template-func-analiticas.blade.php",
                "views/template-func-automatization.blade.php",
                "views/template-func-crm-escala.blade.php",
                "views/template-func-email.blade.php",
                "views/template-func-digital-announces.blade.php",
                "views/template-escala-fex.blade.php",
                "views/template-zoom-demo-meeting.blade.php",
                "views/template-open-webinar-escala.blade.php",
                "views/template-open-webinar-escala-meeting.blade.php",
                "views/template-blog-home.blade.php",
                "views/template-blog-category.blade.php",
                "views/single-post.blade.php",
                "views/template-zoom-demo-home.blade.php",
                "views/template-zoom-demo-home-landing.blade.php",
                "views/template-zoom-demo-home-step1.blade.php",
                "views/template-zoom-demo-home-step2.blade.php",
                "views/template-landing-pricing-page.blade.php",

            );
        }
    }
}
