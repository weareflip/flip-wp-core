<?php
namespace Flip;

class Format
{
    public static function phoneLink($phone)
    {
        return self::link(self::phoneHref($phone), $phone);
    }

    public static function phoneHref($phone)
    {
        return 'tel:' . str_replace([' ', '(', ')'], '', $phone);
    }

    public static function emailLink($email)
    {
        return self::link(self::emailHref($email), $email);
    }

    public static function emailHref($email)
    {
        return 'mailto:' . $email;
    }

    private static function link($href, $body)
    {
        return '<a href="' . $href . '">' . $body . '</a>';
    }

}