<?php
use Themosis\Facades\Filter;

/**
 * Add SVG Support for file uploads
 */
Filter::add('upload_mimes', function($mimes){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});