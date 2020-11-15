<?php

namespace MVC\controllers;

class ToolControllers
{
    public static function PrettyShow($cmd)
    {
        print("<pre>" . print_r($cmd, true) . "</pre>");
    }
}