<?php

class Help extends Controller
{
    public function index()
    {
        $data["page_title"] = "Help";
        $this->view("market/help",$data);
    }
}