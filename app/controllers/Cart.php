<?php

class Cart extends Controller
{
    public function index()
    {
        $data["page_title"] = "Cart";
        $this->view("market/cart",$data);
    }
}