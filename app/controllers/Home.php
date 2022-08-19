<?php

class Home extends Controller
{
    public function index()
    {
        $book = $this->model("Books");
        $book->getRandomBooks();

        $data["page_title"] = "Home";
        $this->view("market/index", $data);

    }
}