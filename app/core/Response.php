<?php


class Response
{
    public static function json($data = false, bool $exit = true, bool $crossite = false): void
    {
        if($crossite){
            header("Access-Control-Allow-Origin: *");
        }

        header('Content-Type: application/json; charset=UTF-8');

        if($data){
            echo json_encode($data);
        }

        if($exit) exit;
    }
}