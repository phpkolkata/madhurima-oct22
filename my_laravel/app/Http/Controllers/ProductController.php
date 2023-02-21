<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product_add(){
        // logics
        return view("admin.product_add");
    }
    function product_adding(Request $r){
        return $r->all();
        // logics
        return "working";
    }

}
