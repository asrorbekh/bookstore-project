<?php

try {
    session_start();
    require "../app/config/core.php";
    require "../app/autoload.php";

    $app = new App();

} catch (Error|PDOException|Exception $e) {

    ob_get_contents();
    ob_end_clean();

    http_response_code(500);
    header('Content-Type: application/json; charset=UTF-8');

    $response = new stdClass();
    $response->code = $e->getCode();
    $response->message = $e->getMessage();

    Response::json($response);
}