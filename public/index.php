<?php


try {

    session_start();
    include "../app/config/core.php";

    require("../app/autoload.php");

    if (DEBUG) {
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    } else {
        error_reporting(0);
    }

    $app = new App();

} catch (Exception $e) {

    ob_get_contents();
    ob_end_clean();

    http_response_code(500);
    header('Content-Type: application/json; charset=UTF-8');

    $response = new stdClass();
    $response->code = $e->getCode();
    $response->message = $e->getMessage();

    Response::json($response);
}

?>

