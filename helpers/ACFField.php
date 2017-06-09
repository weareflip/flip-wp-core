<?php

class ACFField {
    public static function get($name, $location = false, $formatValue = true)
    {
        if(!$location && acf_get_loop('active') && $field = get_sub_field($name, $formatValue)) {
            return $field;
        }

        if($location == 'post') {
            $location = get_queried_object()->ID;
        }

        return get_field($name, $location, $formatValue);
    }

    public static function option($name)
    {
        return self::get($name, 'option');
    }

    public static function have($name, $location = false) {
        return have_rows($name, $location);
    }

}