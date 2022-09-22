<?php

const WEB_TITLE = " Bookly";

const DB_DRIVER = "mysql";
const DB_HOST = "localhost";
const DB_NAME = "asrorbek_bookly";
const DB_USER = "root";
const DB_PASS = "";
const DB_CHARSET = "utf8mb4";
const DB_PORT = 3306;

const DSN = DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=".DB_PORT.";charset=" . DB_CHARSET;

const OPTIONS = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];


const DEVELOPER_MODE = true;
const DEBUG = true;


