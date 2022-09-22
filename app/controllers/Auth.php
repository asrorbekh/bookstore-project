<?php

class Auth extends Controller
{

    public function index()
    {
        if (!Functions::isLoggedIn()){
            header("Location: /auth/login");
        }else{
            header("Location: /");
        }
    }
    public function login(): void
    {
        if (Functions::isLoggedIn()) {
            header("Location: /home");
            exit();
        }

        $data["page_title"] = "Login";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $user = $this->model("User");
            $user->login($_GET);
            Debug::get($user);
        }

        $this->view("market/login", $data);
    }
}