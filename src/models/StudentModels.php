<?php

namespace MVC\models;

class StudentModels
{
    private $db;

    public function __construct()
    {
        $this->db = DBModels::getInstance();
    }

    public function getListStudent()
    {
        $sql = "SELECT * FROM Student ORDER BY StudentID ASC";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        //$student = new Student($data);
        //print("<pre>" . print_r($student, true) . "</pre>");die();
        if (empty($data)) {
            return "Not found Student.";
        } else {
            return $data;
        }
    }

    public function editModels($params)
    {
        if (!empty($params)) {
            $sql = "SELECT * FROM Student WHERE StudentID='" . $params[0] . "' LIMIT 1";
            $stmt = $this->db->query($sql);
            $data = $stmt->fetch($this->db::FETCH_ASSOC);
            if (empty($data)) {
                return "Not found Student ID.";
            } else {
                return $data;
            }
        } else {
            return "No Student ID.";
        }
    }

    public function updateModels()
    {
        unset($_POST['btn']);
        //$student = new Student($_POST);
        //print("<pre>" . print_r($_POST, true) . "</pre>");die();
        $sql = "UPDATE Student SET FirstName=:FirstName, LastName=:LastName, Birthday=:Birthday, Gender=:Gender, Address=:Address, Birthplace=:Birthplace, FacID=:FacID WHERE StudentID=:StudentID";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($_POST);
    }

    public function deleteModels($params)
    {
        if (!empty($params)) {
            $sql = "SELECT * FROM Student WHERE StudentID='" . $params[0] . "' LIMIT 1";
            $stmt = $this->db->query($sql);
            $data = $stmt->fetch($this->db::FETCH_ASSOC);
            if (empty($data)) {
                return "Not found Student ID.";
            } else {
                $sql = "DELETE FROM Student WHERE StudentID='" . $params[0] . "'";
                $this->db->query($sql);
                return "Deleted successfully";
            }
        } else {
            return "No Student ID.";
        }
    }


}