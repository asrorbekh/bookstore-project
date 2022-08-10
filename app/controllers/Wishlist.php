<?php

class Wishlist extends Controller
{
    public function index()
    {
        $data["page_title"] = "Wishlist";
        $this->view("market/wishlist",$data);
    }
}