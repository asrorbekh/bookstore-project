<?php

class Add extends Controller
{
    public function index()
    {
        $data["page_title"] = "Add";
        $this->view("market/add",$data);
    }
}