<?php
/**
 * Created by PhpStorm.
 * User: Mehdi
 * Date: 11/14/2017
 * Time: 12:17
 * OOP-001-02
 */

class View
{
    public static function __callStatic($name, $arguments)
    {
        if($name == 'render'){
            self::render_view($arguments[0]);
        }
    }

    private static function render_view($view_name)
    {
        get_template_part('partials/'.$view_name);
    }
}