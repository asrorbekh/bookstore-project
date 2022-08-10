<?php

class Reset extends Controller
{
    public function index()
    {
        $data["page_title"] = "Reset";
        $this->view("market/reset",$data);
    }
}