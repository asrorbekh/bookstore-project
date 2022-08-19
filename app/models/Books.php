<?php

class Books
{
    public function getRandomBooks()
    {
        Model::get([
            "table" => "books",
            RAND() => "LIMIT 10",
        ]);
    }
}