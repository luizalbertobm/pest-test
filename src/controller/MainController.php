<?php

namespace App\controller;

use App\model\User;
use DateTime;

class MainController
{
    public function index()
    {
        $user = new User('Luiz Mesquita', new DateTime('1984-11-09'));
        echo 'Hello ' . $user->name . ' you are ' . $user->getAge() . ' years old';
    }
}