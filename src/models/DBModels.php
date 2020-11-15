<?php

namespace MVC\models;

use PDO;
use PDOException;

class DBModels
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO('mysql:host=localhost;dbname=demo_student_test', 'root', '0979029556');
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
        return self::$instance;
    }
}

