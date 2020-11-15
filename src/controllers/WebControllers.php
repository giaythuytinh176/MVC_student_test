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
        include_once "./src/views/pages/homepage.php";
    }

    public function getAllStudent()
    {
        $studentlist = $this->studentmodels->getListStudent();
        include_once "./src/views/pages/ListStudent.php";
    }

    public function editStudent($params)
    {
        if (!empty($_POST['btn'])) {
            $this->studentmodels->updateModels($params);
            include_once "./src/views/pages/editUpdate.php";
        } else {
            $editmodels = $this->studentmodels->editModels($params);
            include_once "./src/views/pages/edit.php";
        }
    }

    public function deleteStudent($params)
    {
        if (!empty($_POST['btn'])) {
            $delmodels = $this->studentmodels->deleteModels($params);
            include_once "./src/views/pages/deleteUpdate.php";
        } else {
            include_once "./src/views/pages/delete.php";
        }
    }

    public function errorPage()
    {
        include_once "./src/views/pages/404.php";
    }
}