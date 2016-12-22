<?php

class View
{
    function render($name)
    {
        require 'views/pages/' . $name . '.php';
    }
}
