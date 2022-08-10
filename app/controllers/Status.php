<?php

class Status extends Controller
{
    public function index()
    {
        $data["page_title"] = "Status";
        $this->view("market/status",$data);
    }
}

