<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $blogs = Blog::all();
    return view('admin.blog.blogs', compact('blogs'));
  }

  public function edit($id){
    $blog = Blog::findOrFail( $id );
    return view('admin.blog.edit', compact('blog'));
  }

  public function create(){
    return view('admin.blog.create');
  }

  public function store(Request $request){
    return $request->input();
  }
}
