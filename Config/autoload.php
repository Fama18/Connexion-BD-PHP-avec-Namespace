<?php
Class Autoloader {
    static function register() {
        spl_autoload_register(array(__CLASS__, "autoload"));
    }
    static function autoload($class) {
        //echo str_replace("\\", "/", $class);
        /*if(file_exists("../Model/".$class.".php")) {
                require_once "../Model/".$class.".php";
        }
        else if(file_exists("../Controller/".$class.".php")) {
                require_once "../Controller/".$class.".php";
        }
        //namespace
        if(file_exists(str_replace("\\", "/",$class.".php"))) {
            require_once str_replace("\\", "/",$class.".php");
        }*/

        $test = str_replace("\\", "/",$class);
        $test2 = str_replace("\\", "/",__DIR__.$test.".php");

        $test3 = str_replace("Config","",$test2);

        require $test3;
    }
 }
 Autoloader::register();
?>