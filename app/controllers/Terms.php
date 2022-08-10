<?php

class Terms extends Controller
{
    public function index()
    {
        $data["page_title"] = "Terms of service";
        $this->view("market/terms",$data);
    }
}