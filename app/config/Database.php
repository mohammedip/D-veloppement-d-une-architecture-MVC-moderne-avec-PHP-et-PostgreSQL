<?php

namespace App\config;

require __DIR__ . '/../../vendor/autoload.php';

use PDO;
use PDOException;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__ ,2));
$dotenv->load();

class Database {
    private static $connection = null;
   
    private function __construct() {}

    public static function connect() {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO(
                    "pgsql:host=" . $_ENV['HOST'] . ";port={$_ENV['PORT']};dbname=" . $_ENV['DATABASE'],
                    $_ENV['USERNAME'],
                    $_ENV['PASSWORD']
                );
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo"connected successfully";
            } catch (PDOException $error) {
                die("Connection failed: " . $error->getMessage());
            }
        }
        return self::$connection;
    }
}
// Database::connect();

