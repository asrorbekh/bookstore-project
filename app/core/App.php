<?php

class App
{
    private mixed $controller = "Home";
    private string $method = "index";

    public function run(): void
    {
        $this->setSession();
        $url = $this->getUrl();

        if (file_exists("../app/controllers/" . ucwords($url[0]) . ".php")) {
            $this->controller = ucwords($url[0]);
            unset($url[0]);
        }

        require "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        if (isset($url[1]) && method_exists($this->controller, $this->method)) {
            $this->method = $url[1];
            unset($url[1]);
        }

        try {
            $params = $url ? array_values($url) : [];
            call_user_func_array([$this->controller, $this->method], $params);
        } catch (Error $e) {
            http_response_code(404);
            Debug::get($e);
            // header("Location: /_404");
        }

    }

    private function getUrl(): array
    {
        $url = $_GET['url'] ?? "home";
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }

    private function setSession():void
    {
        session_name('session_id');
        session_start();
    }
}
