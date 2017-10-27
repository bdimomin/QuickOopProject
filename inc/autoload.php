<?php

require_once(dirname(__FILE__) . "/config.php");

function __autoload($class_name) {
    $class = explode("_", $class_name);
    $path = implode("/", $class).".php";
    require $path;
}