<?php
use Themosis\Facades\Action;

/**
 * Remove unneeded Admin sidebar menu items
 * https://codex.wordpress.org/Function_Reference/remove_menu_page
 */

Action::add('admin_menu', function()
{
    remove_menu_page( 'plugins.php' );
});