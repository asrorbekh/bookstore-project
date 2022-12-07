<?php

class Wishlist extends Controller
{
    public function index(): void
    {
        $data["page_title"] = "Wishlist";
        $this->view("market/wishlist",$data);
    }
}