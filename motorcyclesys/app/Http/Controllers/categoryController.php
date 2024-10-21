<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoryModel;


class categoryController extends Controller
{
    public static function index(){
        $categories = categoryModel::get();
        return view('cms.category.list')->with(['categories' => $categories]);
    }

    public static function save(Request $request){
        
        date_default_timezone_set('Asia/Manila');

        categoryModel::create([
            'cat_name' => $request->input('inp_category'),
            'cat_description' => $request->input('inp_description'),
        ]);

        return redirect('/category/list?success');
    }
}
