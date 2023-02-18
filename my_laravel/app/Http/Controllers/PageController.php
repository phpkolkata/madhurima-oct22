<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class PageController extends Controller
{
    function page1(){
        // logics
        return view("pages/page1");
    }

      function page2(){
        // logics
        return view("pages/page2");
    }
}
