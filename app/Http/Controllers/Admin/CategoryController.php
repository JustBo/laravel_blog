<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
      $categories = Category::all();
      return view('admin.category.categories', compact('categories'));
    }

    public function edit($id){
      $category = Category::findOrFail( $id );
      return view('admin.category.edit', compact('category'));
    }

    public function create(){
      return view('admin.category.create');
    }

    public function store(Request $request){
      return $request->input();
    }
}
