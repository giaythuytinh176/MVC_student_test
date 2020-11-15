<?php

namespace MVC\models;

use PDO;
use PDOException;

class DBModels
{
    private static $instance = null;
    const HOST_DB = "localhost";
    const USER_DB = "root";
    const DBNAME_DB = "demo_student_test";
    const PASSWORD_DB = "0979029556";

    public static function getInstance()
    {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO('mysql:host=' . DBModels::HOST_DB . ';dbname=' . DBModels::DBNAME_DB, DBModels::USER_DB, DBModels::PASSWORD_DB);
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
        return self::$instance;
    }
}

