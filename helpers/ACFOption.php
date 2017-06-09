<?php

namespace Flip;

class ACFOption
{
    public static function register($config) {

        if(is_string($title = $config)) {
            $config = [];
            $config['page_title'] = $title;
        }

        if(empty($config['page_title'])) {
            return false;
        }

        if( function_exists('acf_add_options_page') ) {
            acf_add_options_page($config);
        }
    }

    public static function registerSubPage($config) {

        if(is_string($title = $config)) {
            $config = [];
            $config['page_title'] = $title;
        }

        if(empty($config['page_title'])) {
            return false;
        }

        if( function_exists('acf_add_options_sub_page') ) {
            acf_add_options_sub_page($config);
        }
    }

}