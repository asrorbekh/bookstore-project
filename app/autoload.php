<?php

spl_autoload_register(static function ($class) {
    $filename = str_replace("\\", "/", $class) . ".php";
    require "../app/core/" . $filename;
});