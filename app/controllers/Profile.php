<?php

class Profile extends Controller
{
    public function index()
    {
        if (!Functions::isLoggedIn()) {
            echo "<script>alert('Your are not logged in')</script>";
            header("Location: /login");
            exit();
        }
        $data["page_title"] = "Profile";
        $this->view("market/profile", $data);
    }

    public function edit()
    {
        $data["page_title"] = "Settings";
        $this->view("market/settings",$data);
    }

    public function logout()
    {
        $user = $this->model("User");
        $user->logout();
    }

    public function settings()
    {

    }
}