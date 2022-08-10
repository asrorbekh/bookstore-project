<?php

abstract class Controller
{
    protected function view($view, $data = []): void
    {
        if (file_exists("../app/views/" . strtolower($view) . ".php")) {
            include "../app/views/" . strtolower($view) . ".php";
        } else {
            header("Location: /_404");
        }
    }

    protected function model($model)
    {
        if (file_exists("../app/models/" . ucwords($model) . ".php")) {
            include "../app/models/" . ucwords($model) . ".php";
            return new $model();
        }

        return false;
    }
}
