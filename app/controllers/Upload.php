<?php

class Upload extends Controller
{
    public function index()
    {
        $data["page_title"] = "Upload";
        $this->view("market/upload",$data);
    }
}