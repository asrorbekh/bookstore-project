<?php

class App
{
    private mixed $controller = "Home";
    private string $method = "index";
    private array $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        if (file_exists("../app/controllers/" . ucwords($url[0]) . ".php")) {
            $this->controller = ucwords($url[0]);
            unset($url[0]);
        }

        require "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $this->method)) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        try {
            $this->params = $url ? array_values($url) : [];
            call_user_func_array([$this->controller, $this->method], $this->params);
        } catch (Error) {
            header("Location: /_404");
        }

    }

    private function getUrl(): array
    {
        $url = $_GET['url'] ?? "home";
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }
}
