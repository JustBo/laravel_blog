<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Http\Requests\StoreBlog;
use App\Services\ImageUploadService;

class BlogController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $blogs = Blog::with('categories')->get();
    return view('admin.blog.blogs', compact('blogs'));
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id){
    $categories = Category::pluck('name', 'id');
    $blog = Blog::findOrFail( $id );
    return view('admin.blog.edit', compact('blog', 'categories'));
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    $categories = Category::pluck('name', 'id');
    return view('admin.blog.create', compact('categories'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreBlog $request){

    $filenameToStore = ImageUploadService::upload( $request, 'icon', 'public/images/blog' );

    $inputs = $request->input();
    $inputs['icon'] = $filenameToStore;

    $blog = Blog::create( $inputs );

    $blog->categories()->sync($request->input('category_list'));
    return redirect()->route('admin.blog.index');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(StoreBlog $request, $id){

    $blog = Blog::findOrFail($id);

    $filenameToStore = ImageUploadService::upload( $request, 'icon', 'public/images/blog', $blog->icon );

    $inputs = $request->input();
    $inputs['icon'] = $filenameToStore;

    $blog->update( $inputs );
    $blog->categories()->sync($request->input('category_list'));
    return redirect()->route('admin.blog.index');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $blog = Blog::findOrFail($id);
      ImageUploadService::delete( 'public/images/blog', $blog->icon );
      $blog->delete();
      return redirect()->route('admin.blog.index');
  }
}
