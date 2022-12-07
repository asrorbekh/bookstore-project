<?php

try {

    require "../app/config/core.php";
    require "../app/autoload.php";

    $app = new App();
    $app->run();

} catch (Error|PDOException|Exception $e) {

    ob_get_clean();

    http_response_code(500);
    header('Content-Type: application/json; charset=UTF-8');

    $response = new stdClass();
    $response->code = $e->getCode();
    $response->line = $e->getLine();
    $response->message = $e->getMessage();

    Response::json($response);
}