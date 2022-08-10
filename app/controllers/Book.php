<?php

class Book extends Controller
{
    public function index()
    {
        $data["page_title"] = "Book";
        $this->view("market/book",$data);
    }
}