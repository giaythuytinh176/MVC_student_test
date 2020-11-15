<?php

namespace MVC\controllers;

class UrlControllers
{
    protected $controllers = "homepage";
    protected $action = "index";
    protected $params = [];
    private $webcontrollers;

    public function __construct()
    {
        $this->webcontrollers = new WebControllers();
        $parseurl = $this->parseURL();

        if (!empty($parseurl[0])) {
            $this->controllers = $parseurl[0];
        }
        if (!empty($parseurl[1])) {
            $this->action = $parseurl[1];
        }
        if (!empty($parseurl[0]) && !empty($parseurl[1]) && !empty($parseurl[2])) {
            for ($i = 2; $i < count($parseurl); $i++) {
                $this->params[] = $parseurl[$i];
            }
        }
        $this->parseController();
    }

    public function parseController()
    {
        switch ($this->controllers) {
            case "liststudent":
                if (!empty($this->action) && $this->action !== "index") {
                    $this->parseAction();
                } else {
                    $this->webcontrollers->getAllStudent();
                }
                break;


            case "homepage":
                $this->webcontrollers->homepage();
                break;

            default:
                $this->webcontrollers->errorPage();
        }
    }

    public function parseURL()
    {
        if (!empty($_GET['url'])) {
            return explode("/", filter_var(trim($_GET['url'], "/")));
        }
    }

    public function parseAction()
    {
        switch ($this->action) {
            case "edit":
                $this->webcontrollers->editStudent($this->params);
                break;
            case "delete":
                $this->webcontrollers->deleteStudent($this->params);
                break;
        }
    }
}
