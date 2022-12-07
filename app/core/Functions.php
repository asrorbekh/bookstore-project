<?php

class Functions
{
    public static function checkError(): void
    {
        if (isset($_SESSION["error"]) && $_SESSION["error"] !== "") {
            echo $_SESSION["error"];
            unset($_SESSION["error"]);
        }
    }

    /**
     * @throws Exception
     */
    public static function generateRandomString(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 16; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function isLoggedIn(): bool
    {
        Database::get()->connect();
        if (isset($_SESSION["auth_key"])) {
            return true;
        }
        return false;
    }

}