<?php

$host = $_SERVER['HTTP_HOST'];
$path = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

define('BASE_URL', "http://" . $host . $path);

