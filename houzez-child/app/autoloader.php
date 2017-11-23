<?php
/**
 * Created by PhpStorm.
 * User: Mehdi
 * Date: 11/14/2017
 * Time: 10:04
 * OOP-001
 */

class Autoloader
{
    public function __construct()
    {
        spl_autoload_register(array($this, 'autoload'));
    }

    public function autoload($class_name)
    {
        $file = $this->convert_class_to_file($class_name);
        if (is_file($file) && file_exists($file) && is_readable($file)) {
            var_dump($file);
            include $file;
        }


    }

    public function convert_class_to_file($class_name)
    {
        $class = strtolower($class_name);
        $class = 'class-'.$class;
        $filename = $class.'.php';
        return get_stylesheet_directory_uri().DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.$filename;
    }

    public static function msn_echo()
    {
        echo '<br><br>';
        echo get_stylesheet_directory_uri();
        echo '<br><br>';
        echo get_stylesheet_directory();
        echo '<br><br>';
        echo get_template_directory_uri();
        echo '<br><br>';
        echo get_template_directory();
        echo '<br><br>';
    }
}

new Autoloader();