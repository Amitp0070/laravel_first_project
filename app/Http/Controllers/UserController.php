<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function home(){
        return view('home');
    }
    function userHome()
    {
        $name  = 'Amit';
        $users = array('Amit', 'Sumit', 'Rahul');
        return view('test', ["name"=>$name, "users"=>$users]);
    }

    function userWelcome()
    {
        return View('welcome');
    }

    function userAbout()
    {
        return View('about');
    }
}
