<?php

class Map extends Controller
{
    public function index()
    {
        $data["page_title"] = "Site map";
        $this->view("market/map",$data);
    }
}