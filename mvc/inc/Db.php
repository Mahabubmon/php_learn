<?php 
include "config.php";
class Db{
    private static $pdo;
    public static function connection(){if(!isset(self::$pdo)){
        try {
            self::$pdo = new PDO('mysql:host='.Db_NAME);
        }

    }}
        
}



?>