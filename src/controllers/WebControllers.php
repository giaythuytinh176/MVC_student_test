<?php

namespace MVC\controllers;

use MVC\models\StudentModels;

class WebControllers
{
    private $studentmodels;

    public function __construct()
    {
        $this->studentmodels = new StudentModels();
    }

    public function homepage()
    {
        $this->view("homepage");
    }

    public function getAllStudent()
    {
        $studentlist = $this->studentmodels->getListStudent();
        $this->view("ListStudent", [$studentlist]);
    }

    public function editStudent($params)
    {
        if (!empty($_POST['btn'])) {
            $editmodels = $this->studentmodels->updateModels($params);
            $this->view("Student", [$editmodels, $params, "Updated"]);
        } else {
            $editmodels = $this->studentmodels->editModels($params);
            $this->view("edit", [$editmodels, $params]);
        }
    }

    public function deleteStudent($params)
    {
        if (!empty($_POST['btn'])) {
            $delmodels = $this->studentmodels->deleteModels($params);
            $this->view("Student", [$delmodels, $params, "Deleted"]);
        } else {
            $this->view("delete", ["", $params]);
        }
    }

    public function addStudent($params)
    {
        echo 1111;
    }

    public function errorPage($head = "")
    {
        $this->view("404", ["", "", $head]);
    }

    public function view($v, $data = [])
    {
        require_once "./src/views/pages/$v.php";
    }
}