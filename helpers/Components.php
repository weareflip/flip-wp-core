<?php
namespace Flip;

use Themosis\Facades\View;

class Components
{
    public static function render($componentField = 'components') {

        while (the_flexible_field($componentField)) {
            self::addComponent(get_row_layout());
        }

    }

    private static function addComponent($componentName) {
        echo View('components.' . $componentName .'.' . $componentName);
    }
}