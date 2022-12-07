<?php

abstract class Controller
{
    public array $data = [];
    protected function view($view, $data = []): void
    {
        if (file_exists("../app/views/" . strtolower($view) . ".php")) {
            include "../app/views/" . strtolower($view) . ".php";
        } else {
            include "../app/views/404.php";
        }
    }

    protected function model($model)
    {
        try {
            if (file_exists("../app/models/" . ucwords($model) . ".php")) {
                include "../app/models/" . ucwords($model) . ".php";
                return new $model();
            }
        } catch (Error $exception) {
            Debug::get($exception);
        }

        return false;
    }
}
