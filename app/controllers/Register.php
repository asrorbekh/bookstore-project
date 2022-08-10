<?php

class Register extends Controller
{
    public function index()
    {
        $data["page_title"] = "Register";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {


            $user = $this->model("User");
            $user->register();
        }

        $this->view("market/register", $data);
    }
}