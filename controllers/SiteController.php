<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public $name = "Zaid";

    // public function test()
    // {
    //     echo "test";
    //     exit;
    // }

    public function home()
    {
        $params = [
            'name' => 'TheParam',
        ];
        // return $this->test();
        // return $this->$name;
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {

        $body = $request->getBody();

        dump($body);

        exit;

        return "From SiteController";
    }
}
