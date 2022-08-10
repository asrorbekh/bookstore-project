<?php

class _404 extends Controller
{
    public function index()
    {
        $data["page_title"] = "404 not found";
        $this->view("404",$data);
    }
}