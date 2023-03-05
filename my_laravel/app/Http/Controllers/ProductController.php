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
        $validated = $r->validate([
        'name' => 'required|min:4|max:6',
        'age' => 'required|numeric',
        'email'=>'required|email'
    ]);

        return redirect('/admin/product');
    }

}
