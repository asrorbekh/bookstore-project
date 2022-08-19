<?php

class Reset extends Controller
{
    public function index()
    {
        if (!Functions::isLoggedIn()) {
            header("Location: /login");
            exit();
        }
        $data["page_title"] = "Reset";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $user = $this->model("User");
            $user->reset($_POST);
            exit();

        }

        $this->view("market/reset", $data);
    }
}