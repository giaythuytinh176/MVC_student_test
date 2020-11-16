<?php

namespace MVC\models;

use MVC\controllers\ToolControllers;

class Student
{
    protected $StudentID;
    protected $FirstName;
    protected $LastName;
    protected $Birthday;
    protected $Gender;
    protected $Address;
    protected $Birthplace;
    protected $FacID;

    public function __construct(array $properties = array())
    {
        foreach ($properties as $key => $value) {
            $this->{$key} = $value;
        }
    }

//    public function __construct($StudentID, $FirstName, $LastName, $Birthday, $Gender, $Address, $Birthplace, $FacID)
//    {
//        $this->StudentID = $StudentID;
//        $this->FirstName = $FirstName;
//        $this->LastName = $LastName;
//        $this->Birthday = $Birthday;
//        $this->Gender = $Gender;
//        $this->Address = $Address;
//        $this->Birthplace = $Birthplace;
//        $this->FacID = $FacID;
//    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->Birthday;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @return mixed
     */
    public function getBirthplace()
    {
        return $this->Birthplace;
    }

    /**
     * @return mixed
     */
    public function getFacID()
    {
        return $this->FacID;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @return mixed
     */
    public function getStudentID()
    {
        return $this->StudentID;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    /**
     * @param mixed $Birthday
     */
    public function setBirthday($Birthday)
    {
        $this->Birthday = $Birthday;
    }

    /**
     * @param mixed $Birthplace
     */
    public function setBirthplace($Birthplace)
    {
        $this->Birthplace = $Birthplace;
    }

    /**
     * @param mixed $FacID
     */
    public function setFacID($FacID)
    {
        $this->FacID = $FacID;
    }

    /**
     * @param mixed $FirstName
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
    }

    /**
     * @param mixed $Gender
     */
    public function setGender($Gender)
    {
        $this->Gender = $Gender;
    }

    /**
     * @param mixed $LastName
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }

    /**
     * @param mixed $StudentID
     */
    public function setStudentID($StudentID)
    {
        $this->StudentID = $StudentID;
    }

}