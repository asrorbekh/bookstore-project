<?php

class Login extends Controller
{
    public function index()
    {
        $data["page_title"] = "Login";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $user = $this->model("User");
            $user->login($_GET);
        }

        $this->view("market/login", $data);
    }
}