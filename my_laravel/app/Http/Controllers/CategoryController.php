<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //

    function index(){
        $category = DB::table('category')->paginate(5);

        return view('admin.category',['db'=>$category]);
    }
}
