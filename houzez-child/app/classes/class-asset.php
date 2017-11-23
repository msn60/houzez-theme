<?php
/**
 * Created by PhpStorm.
 * User: Mehdi
 * Date: 11/14/2017
 * Time: 10:35
 * OOP-001
 * OOP-001-01
 */

class Asset
{
/*   OOP-001-01 : For future implementation
     public static function __callStatic($method_name, $args)
    {

    }*/
    public static function css($file_name)
    {
        $file_url = THEME_URL.'/assets/css/'.$file_name;
        echo $file_url;

    }

    public static function js($file_name)
    {
        $file_url = THEME_URL.'/assets/js/'.$file_name;
        echo $file_url;
    }

    public static function image($file_name)
    {
        $file_url = THEME_URL.'/assets/images/'.$file_name;
        echo $file_url;
    }
}

