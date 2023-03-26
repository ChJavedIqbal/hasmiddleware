<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    function group()
    {
        return "Welcome to the group ";
    }
    function index()
    {
        return "welcome to the index ";
    }
}
