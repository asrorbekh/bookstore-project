<?php

class User
{
    private string $error = "";

    public function register($POST): void
    {
        $POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
        Database::get()->connect();
        $data = [
            "auth_key" => Functions::generateRandomString(),
            "username" => trim($POST["username"]),
            "email" => trim($POST["email"]),
            "password" => trim($POST["password"]),
            "passwordRepeat" => trim($POST["passwordRepeat"]),
            "date" => date("Y-m-d H:i:s")
        ];

        if (!preg_match("/^[a-zA-Z\d]+$/", $data["username"])) {
            $this->error .= "Please enter valid username <br>";
        }

        if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
            $this->error .= "Please enter valid email <br>";
        }

        if ($data["password"] !== $data["passwordRepeat"]) {
            $this->error .= "Password do not match<br>";
        }

        if (!preg_match("/^[a-zA-Z\d]+$/", $data["password"]) && !preg_match("/^[a-zA-Z\d]+$/", $data["passwordRepeat"])) {
            $this->error .= "Please enter valid password <br>";
        }

        if (strlen($data["password"]) < 6 && strlen($data["passwordRepeat"]) > 12) {
            $this->error .= "Password must be at least 6 characters long and maximal 12<br>";
        }

        $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $arr[":email"] = $data["email"];
        $result = Model::read($sql, $arr);
        if (is_array($result)) {
            $this->error .= "Email already in use";
        }

        if ($this->error == "") {

            $sql = "INSERT INTO `users`(`auth_key`, `username`, `email`, `password`, `date`) VALUES (:auth_key,:username,:email,:password,:date)";
            $params = [
                ":auth_key" => $data["auth_key"],
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

    public function login($POST): void
    {
        $POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
        Database::get()->connect();
        $data = [
            "email" => trim($POST["email"]),
            "password" => trim($POST["password"]),
        ];

        if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
            $this->error .= "Please enter valid email <br>";
        }

        if (strlen($data["password"]) < 6) {
            $this->error .= "Password must be at least 6 characters long and max 12 <br>";
        }

//        if (empty($data["username"]) && empty($data["email"]) && empty($data["password"]) && empty($data["passwordRepeat"])) {
//            $this->error .= "Please enter value";
//        }

        if ($this->error == "") {

            $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
            $result = Model::read($sql, $data);

            if (is_array($result)) {

                $_SESSION["auth_key"] = $result[0]->auth_key;
                $_SESSION["username"] = $result[0]->username;

                header("Location: /profile");
                exit();
            }

            $this->error .= "Wrong email or password";
        }

        $_SESSION["error"] = $this->error;
    }

    public function reset($POST): void
    {

        $POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
        Database::get()->connect();
        $data = [
            "password" => trim($POST["password"]),
            "newPassword" => trim($POST["newPassword"]),
            "rePassword" => trim($POST["rePassword"])
        ];

        if ($data["newPassword"] !== $data["rePassword"]) {
            $this->error .= "Password do not match<br>";
        }

        if (strlen($data["password"]) < 6) {
            $this->error .= "Password must be at least 6 characters long and max 12 <br>";
        }

        if ($this->error == "") {

            $sql = 'UPDATE `users` SET `password`= :password WHERE auth_key=:auth_key';
            $arr[":password"] = $data["password"];
            $result = Model::read($sql, $arr);

            if (is_array($result)) {

                $_SESSION["password"] = $result[0]->password;


                header("Location: /profile");
                exit();
            }

            $this->error .= "Wrong password";
        }
        $_SESSION["error"] = $this->error;
    }

    public function logout(): void
    {
        if (isset($_SESSION["auth_key"])) {
            unset($_SESSION["auth_key"]);
            header("Location: /");
        }
    }

}





