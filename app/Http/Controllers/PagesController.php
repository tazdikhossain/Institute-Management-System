<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //return "Hello";
        return view('hello');
    }

    public function profile()
    {

        $name = "Tazdik Hossain";
        $id = "21-45116-2";
        $dob = "29/8/2002";

        $names = array("Hulk", "iron man", "Onder women");

        return view('profile')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);

    }
}
