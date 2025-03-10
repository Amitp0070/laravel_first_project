<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function userHome()
    {
        $name  = 'Amit';
        $users = array('Amit', 'Sumit', 'Rahul');
        return view('home', ["name"=>$name, "users"=>$users]);
    }
}
