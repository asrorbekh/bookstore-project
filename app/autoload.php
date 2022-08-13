<?php


spl_autoload_register(function ($class) {
    $filename = str_replace("\\", "/", $class) . ".php";
    require "../app/core/" . $filename;
});



