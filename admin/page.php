<?php
use Themosis\Facades\Action;

/**
 * Remove Editor for "Page" post_type
 */
Action::add('add_meta_boxes', function(){
    remove_post_type_support( 'page', 'editor' );
});