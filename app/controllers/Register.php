<?php

class Register extends Controller
{
    public function index()
    {
        if (Functions::isLoggedIn()) {
            header("Location: /");
            exit();
        }

        $data["page_title"] = "Register";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $user = $this->model("User");
            $user->register($_POST);
            exit();

        }

        $this->view("market/register", $data);
    }
}