<?php

namespace Flip;

class Enqueue
{
    private static $manifest;

    public static function assets($name)
    {
        self::style($name);
        self::script($name);
    }

    public static function style($name)
    {
        if ($file = self::getAsset($name, 'css')) {
            wp_enqueue_style($name, home_url() .$file);
        }

    }

    public static function script($name)
    {
        if ($file = self::getAsset($name, 'js')) {
            wp_enqueue_script($name, home_url() . $file, array(), null, true);
        }
    }

    private static function getAsset($name, $extension)
    {
        $manifest = self::getManifest();
        $file = !empty($manifest[$name][$extension]) ? $manifest[$name][$extension] : false;

        if (!$file || !file_exists(dirname(ABSPATH) . DS . $file) ) {
            return false;
        }

        return $file;
    }

    private static function getManifest()
    {
        if(!isset(self::$manifest)) {

            $dir = isset($GLOBALS['dist-directory']) ? $GLOBALS['dist-directory'] : get_template_directory() . '/dist/';

            if (file_exists($dir . 'manifest.json')) {
                self::$manifest = json_decode(file_get_contents($dir . 'manifest.json'), true);
            } else {
                self::$manifest = false;
            }
        }

        return self::$manifest;
    }
}