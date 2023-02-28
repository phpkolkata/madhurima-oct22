<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //

    function index(){
        $category = DB::table('category')->paginate(5);
        return view('admin.category',['db'=>$category]);
    }

    function add(){
        return view('admin.category_add');
    }
    function adding(Request $r){

        // $nm = $r->input('nm');
        // $is_active = $r->input('is_active');
        // $res = DB::table('category')->insert(['name'=>$nm,'is_active'=>$is_active]);

        $data = $r->except('_token');
        $res = DB::table('category')->insert($data);

        return redirect('/admin/category')->with("success", "The data has been updated");
    }
}
