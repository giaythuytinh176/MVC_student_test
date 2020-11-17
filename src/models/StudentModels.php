<?php

namespace MVC\models;

class StudentModels
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getListStudent()
    {
        $sql = "SELECT * FROM Student ORDER BY StudentID ASC";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        $students = [];
        foreach ($data as $val) {
            $student = new Student($val);
            $students[] = $student;
        }
        if (empty($students[0])) {
            return "Not found Student.";
        } else {
            return $students;
        }
    }

//    public function getListStudent()
//    {
//        $sql = "SELECT * FROM Student ORDER BY StudentID ASC";
//        $stmt = $this->db->query($sql);
//        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
//        $students = [];
//        foreach ($data as $val) {
//            $student = new Student($val['StudentID'], $val['FirstName'], $val['LastName'], $val['Birthday'], $val['Gender'], $val['Address'], $val['Birthplace'], $val['FacID']);
//            $students[] = $student;
//        }
//        if (empty($students[0])) {
//            return "Not found Student.";
//        } else {
//            return $students;
//        }
//    }

//    public function getListStudent()
//    {
//        $sql = "SELECT * FROM Student ORDER BY StudentID ASC";
//        $stmt = $this->db->query($sql);
//        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
//        $students = [];
//        //$student = new Student($data);
//        if (empty($data)) {
//            return "Not found Student.";
//        } else {
//            return $data;
//        }
//    }

    public function getInfo($studentid)
    {
        $sql = "SELECT * FROM Student WHERE StudentID=:StudentID";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(["StudentID" => $studentid]);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        //$student = new Student($data);
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
        $sql = "UPDATE Student SET FirstName=:FirstName, LastName=:LastName, Birthday=:Birthday, Gender=:Gender, Address=:Address, Birthplace=:Birthplace, FacID=:FacID WHERE StudentID=:StudentID";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($_POST);
        return "Updated successfully";
    }

    public function addModel()
    {
        $arr = [];
        $getColStudent = $this->getStudentColumModels();
        foreach ($getColStudent as $val) {
            $arr[$val] = $_REQUEST[$val];
            if (empty($arr[$val])) {
                return "Field $val can't empty.";
            }
        }
        $sql = "SELECT * FROM Student WHERE StudentID='" . $arr["StudentID"] . "' LIMIT 1";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetch($this->db::FETCH_ASSOC);
        if (!empty($data)) {
            return "Student ID existed.";
        } else {
            $sql = "INSERT INTO Student (" . implode(", ", array_keys($arr)) . ") VALUE (:" . implode(", :", array_keys($arr)) . ")";
            $stmt = $this->db->prepare($sql);
            $stmt->execute($arr);
            return "Added successfully";
        }
    }

    public function getStudentColumModels()
    {
        $sql = "SHOW COLUMNS FROM Student";
        $stmt = $this->db->query($sql);
        $data = $stmt->fetchAll($this->db::FETCH_ASSOC);
        $arr = [];
        foreach ($data as $val) {
            $arr[] = $val['Field'];
        }
        return $arr;
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