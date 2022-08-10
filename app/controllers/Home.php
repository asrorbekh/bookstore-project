<?php

class Home extends Controller
{
    public function index()
    {
        $data["page_title"] = "Home";
        $this->view("market/index", $data);
    }
}