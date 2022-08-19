<?php

class Profile extends Controller
{
    public function index()
    {
        if (!Functions::isLoggedIn()) {
            header("Location: /login");
            exit();
        }
        $data["page_title"] = "Profile";
        $this->view("market/profile", $data);
    }

    public function edit()
    {
        if (!Functions::isLoggedIn()) {
            header("Location: /login");
            exit();
        }
        $data["page_title"] = "Edit profile";
        $this->view("market/editProfile", $data);
    }

    public function logout()
    {
        if (!Functions::isLoggedIn()) {
            header("Location: /login");
            exit();
        }
        $user = $this->model("User");
        $user->logout();
    }

    public function settings()
    {
        $data["page_title"] = "Settings";
        $this->view("market/settings",$data);
    }
}