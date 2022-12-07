<?php

class Database
{
    private ?object $connection = null;
    private static ?object $factory = null;

    public static function get(): object
    {
        if (!self::$factory) {
            self::$factory = new self();
        }
        return self::$factory;
    }

    public function connect(): ?PDO
    {
        try {

            $this->connection = new PDO(DSN, DB_USER, DB_PASS, OPTIONS);
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
        $this->connection = null;
    }
}