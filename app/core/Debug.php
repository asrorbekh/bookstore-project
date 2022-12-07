<?php

class Debug
{
    public static function get($data = null, bool $exit = true): void
    {
        if ($data) {
            echo '<pre>';
            print_r($data);
            echo '</pre>';
        }

        if ($exit) {
            exit();
        }
    }
}

