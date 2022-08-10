<?php

class Database
{
    private ?object $connection = null;
    private static ?object $factory = null;

    public static function get(): object
    {
        if (!self::$factory) {
            self::$factory = new Database();
        }

        return self::$factory;
    }

    public function connect(): ?PDO
    {
        try {
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $dsn = DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
            $this->connection = new PDO($dsn, DB_USER, DB_PASS, $options);

            return $this->connection;

        } catch (PDOException $e) {

            if (DEVELOPER_MODE) {
                Debug::get($e);
            }
        }
        return null;
    }

    public function __destruct()
    {
        return $this->connection = null;
    }
}