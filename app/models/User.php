<?php

class User extends Model
{
    public string $error = "";
    public array $get;
    public array $data=[];

    public function register($POST)
    {
        $POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
        Database::get()->connect();
        $data = [
            "url_address" => $this->generateRandomString(),
            "username" => trim($POST["username"]),
            "email" => trim($POST["email"]),
            "password" => trim($POST["password"]),
            "passwordRepeat" => trim($POST["passwordRepeat"]),
            "date" => date("Y-m-d H:i:s")
        ];

        if (!preg_match("/^[a-zA-Z]+$/", $data["username"])) {
            $this->error .= "Please enter valid username <br>";
        }

        if (!preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/", $data["email"])) {
            $this->error .= "Please enter valid email <br>";
        }

        if ($data["password"] !== $data["passwordRepeat"]) {
            $this->error .= "Password do not match";
        }

        if (strlen($data["password"]) < 6) {
            $this->error .= "Password must be at least 6 characters long";
        }

        $this->get['user'] = Model::get([
            "table" => "users",
            "where" => [
                "email" => $data["email"]
            ],
            [
                "limit" => 1
            ]]);

        if ($this->get["user"]) {
            if (is_object($this->get["user"]) && property_exists($this->get["user"], "id")) {
                $this->data["error"] = "";
            }
        }


        if ($this->error == "") {
            $sql = "INSERT INTO `users`(`user_url`, `username`, `email`, `password`, `date`) VALUES (:user_url,:username,:email,:password,:date)";
            $params = [
                ":user_url" => $data["url_address"],
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
        } else {
            header("Location: /_404");
            exit();
        }
    }

    public function login($POST)
    {

    }

    public function reset($POST)
    {
    }

    private function generateRandomString()
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





