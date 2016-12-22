<?php

class Bootstrap
{
    /** Bootstrap class som hanterar alla url requests
     * */
    function __construct()
    {
        if (empty($_GET)) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return;
        }

        $url = explode('/', $_GET['url?']);
        $file = 'controllers/' . $url[0] . '.php';

        if (file_exists($file)) {
            require $file;
        }

        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } elseif (isset($url[1])) {
            $controller->{$url[1]}();
        } else {
            $controller->index();
        }
    }


}