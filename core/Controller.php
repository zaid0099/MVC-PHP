<?php

namespace app\core;

class Controller
{

    // public $name = "zaid";
    public function test()
    {
        echo "test";
        exit;
    }
    public function render($view, $params = [])
    {
        // echo "<pre>";
        // var_dump($view, $params);
        // echo "<pre>";
        // exit;
        return Application::$app->router->renderView($view, $params);
        // exit;
        // return $this->test;
    }
}
