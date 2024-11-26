<?php
class MySql
{
    private static $pdo;

    public static function conectar()
    {
        if (self::$pdo == null) {
            try {
                self::$pdo = new PDO(
                    'mysql:host=' . HOST .
                        ';dbname=' . DATABASE,
                    USER,
                    PASSWORD,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND =>
                    "SET NAMES uft8")
                );
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\Throwable $th) {
                echo '<h2> Não foi possivel conectar! </h2>';
            }
        }
        return self::$pdo;
    }
}