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
            exit;
        }
    }

    public static function checkError(): void
    {
        if (isset($_SESSION["error"]) && $_SESSION["error"] !== "") {
            echo $_SESSION["error"];
            unset($_SESSION["error"]);
        }
    }
}

