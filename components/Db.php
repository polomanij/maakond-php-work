<?php

class Db {
    public static function getConnection()
    {
        $dbParamsPath = ROOT.'/config/db_params.php';
        $params = include $dbParamsPath;
        
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        
        return $db;
    }
}
