<?php

namespace Flip;

class SVG
{

    public static function embed($reference) {
        echo self::get($reference);
    }

    public static function get($reference) {
        $id = self::getID($reference);

        if(empty($id) || !is_numeric($id) || get_post_mime_type($id) != 'image/svg+xml' || !file_exists($path = get_attached_file($id))){
            return false;
        }

        return file_get_contents($path);
    }

    private static function getID($reference) {
        if(is_object ($reference) && isset($reference->ID)) {
            return $reference->ID;
        }

        if(is_array($reference) && isset($reference['ID'])) {
            return $reference['ID'];
        }

        if(!is_array($reference) && !is_object($reference)) {
            return $reference;
        }

        return false;

    }
}