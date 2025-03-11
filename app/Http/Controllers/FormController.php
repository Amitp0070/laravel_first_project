<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function userForm(Request $req){

        $req->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'city' => 'required|uppercase',
            'gender' => 'required',
            'skill' => 'required',
        ],
        // Custom error message it self
        [
            'name.required' => 'Please enter your name',
            'name.min' => 'Name must be at least 3 characters',
            'name.max' => 'Name must be at most 10 characters',
            'email.required' => 'Please enter your email',
            'email.email' => 'Please enter a valid email',
            'city.required' => 'Please enter your city',
        ]);

        // echo "User name is: $req->name";
        // echo "<br>";
        // echo "User email is: $req->email";
        // echo "<br>";
        // echo "User city is: $req->city";
        // echo "<br>";
        // echo "User gender is: $req->gender";
        // echo "<br>";
        // echo "User skill is: $req->skill";


        // echo "User city is: $req->city";
        // echo "<br>";
        // echo "User age is: $req->age";
        // echo "<br>";
        // print_r($req->skill);
        return $req;
    }
}
