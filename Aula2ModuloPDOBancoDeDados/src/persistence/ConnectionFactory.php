<?php
  
  namespace App\persistence;

  class ConnectionFactory {

    private static $connection = null;

    public static function getConnection(): PDO {
        if (self::$connection == null ) {
            $dnsStr = "mysql:host=172.17.0.2;dbname=aulabanco2m";
            self::$connection = new \PDO($dnsStr, username: "root", password: "admin123");
            self::$connection -> setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
         return self::$connection;

    }
  }

