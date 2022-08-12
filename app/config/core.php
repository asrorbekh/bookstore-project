<?php

const WEB_TITLE = " Bookly";

const DB_DRIVER = "mysql";
const DB_HOST = "localhost";
const DB_NAME = "bookly_db";
const DB_USER = "root";
const DB_PASS = "";
const DB_CHARSET = "utf8mb4";
//const DB_PORT = 3360;

const DEVELOPER_MODE = true;
const DEBUG = true;

if (DEBUG) {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
} else {
    ini_set("display_errors", 0);
}
