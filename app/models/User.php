<?php

class User extends Model
{
    private string $error = "";

    public function register($POST)
    {
        $POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
        Database::get()->connect();
        $data = [
            "user_url" => $this->generateRandomString(),
            "username" => trim($POST["username"]),
            "email" => trim($POST["email"]),
            "password" => trim($POST["password"]),
            "passwordRepeat" => trim($POST["passwordRepeat"]),
            "date" => date("Y-m-d H:i:s")
        ];

        if (!preg_match("/^[a-zA-Z]+$/", $data["username"])) {
            $this->error .= "Please enter valid username <br>";
        }

        if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
            $this->error .= "Please enter valid email <br>";
        }

        if ($data["password"] !== $data["passwordRepeat"]) {
            $this->error .= "Password do not match<br>";
        }

        if (strlen($data["password"]) < 6) {
            $this->error .= "Password must be at least 6 characters long <br>";
        }

        if (empty($data["username"]) && empty($data["email"]) && empty($data["password"]) && empty($data["passwordRepeat"])) {
            $this->error .= "Please input fields";
        }

        if ($this->error == "") {
            $sql = "INSERT INTO `users`(`user_url`, `username`, `email`, `password`, `date`) VALUES (:user_url,:username,:email,:password,:date)";
            $params = [
                ":user_url" => $data["user_url"],
                ":username" => $data["username"],
                ":email" => $data["email"],
                ":password" => $data["password"],
                ":date" => $data["date"],
            ];
            $result = Model::insert($sql, $params);
            if ($result) {
                header("Location: /login");
                exit();
            }
        }
        $_SESSION["error"] = $this->error;

    }

    public function login($POST)
    {
        header("Location: /");
    }

    public function reset($POST)
    {

    }

    private function generateRandomString(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 15; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}





