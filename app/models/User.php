<?php

class User extends Model
{
    private string $error = "";

    public function register($POST)
    {
        $POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

        $data = [
            "username" => trim($POST["username"]),
            "email" => trim($POST["email"]),
            "password" => trim($POST["password"]),
            "passwordRepeat" => trim($POST["passwordRepeat"]),
        ];
        Debug::get($data);
    }

    public function login($POST)
    {
    }

    public function reset($POST)
    {
    }
}

