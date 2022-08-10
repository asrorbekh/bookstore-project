<?php

class Profile extends Controller
{
    public function index()
    {
        $data["page_title"] = "Profile";
        $this->view("market/profile", $data);
    }
}