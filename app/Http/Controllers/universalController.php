<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class universalController extends Controller
{
    function index(){
        return view('index');
    }
    function courses(){
        return view('courses');
    }
    function blog(){
        return view('blog');
    }
    function videos(){
        return view('videos');
    }
  

}

