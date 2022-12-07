<?php

class Connect
{
    private static Connect $factory;
    private object|null $database;


    public static function getFactory(): Connect
    {
        if (!self::$factory) {
            self::$factory = new self();
        }
        return self::$factory;
    }

    public function connect(): PDO|stdClass|bool
    {
        try {
            $this->database = new PDO(DSN, DB_USER, DB_PASS, OPTIONS);
            return $this->database;

        } catch (PDOException $e) {

            http_response_code(503);

            $response = new stdClass();
            $response->error = new stdClass();
            $response->error->code = $e->getCode();
            $response->error->message = $e->getMessage();
            $response->error->file = $e->getFile();
            $response->error->line = $e->getLine();

            return $response;
        }
    }

    public function destruct()
    {
        return $this->database = null;
    }
}