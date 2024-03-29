<?php
use Themosis\Facades\Filter;

/**
 * Change Login Header URL and Title
 */
Filter::add('login_headerurl', function()
{
    return home_url();
});

Filter::add('login_headertext', function()
{
    return get_bloginfo('name');
});
