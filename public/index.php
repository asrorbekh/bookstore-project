<?php

if (isset($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN']) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');

    header('Access-Control-Max-Age: 86400'); // cache for 1 day
}

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, PUT, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}

if (isset($_SERVER["CONTENT_LENGTH"]) && $_SERVER["CONTENT_LENGTH"]) {
    $allowed_request_length = ((int)ini_get('post_max_size') * 1024 * 1024);

    if ($_SERVER["CONTENT_LENGTH"] > $allowed_request_length) {
        ob_get_contents();
        ob_end_clean();
        http_response_code(413);
        header('Content-Type: application/json; charset=UTF-8');
        echo 'Request is too big';
        exit;
    }
}

error_reporting(E_ALL);
ini_set("display_errors", 1);


if (!ini_get('date.timezone')) {
    date_default_timezone_set('Asia/Tashkent');
}

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

