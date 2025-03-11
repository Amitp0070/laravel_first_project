<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function userForm(Request $req){
        echo "User name is: $req->name";
        echo "<br>";
        echo "User email is: $req->email";
        echo "<br>";
        echo "User city is: $req->city";
        echo "<br>";
        echo "User gender is: $req->gender";
        echo "<br>";
        echo "User state is: $req->state";
        echo "<br>";
        echo "User age is: $req->age";
        echo "<br>";
        print_r($req->skill);
        // return $req;
    }
}
