<?php

namespace MVC\Controllers;

use MVC\models\StudentModels;

class APIControllers extends StudentModels
{
    public function api($action, $params)
    {
        switch ($action) {
            case "getliststudent":
                $data = $this->getListStudent();
                header("Content-type: application/json; charset=utf-8");
                echo json_encode($data, JSON_PRETTY_PRINT);
                break;

            case "getinfo":
                if (!empty($params)) {
                    $data = $this->getInfo($params[0]);
                    if (!is_array($data)) $data = ["error" => $data];
                    header("Content-type: application/json; charset=utf-8");
                    echo json_encode($data, JSON_PRETTY_PRINT);
                    break;
                }

            default:
                $data = ["error" => "Invalid method {$action} or invalid request."];
                header("Content-type: application/json; charset=utf-8");
                echo json_encode($data, JSON_PRETTY_PRINT);
        }

    }

}