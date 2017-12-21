<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreComment;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Category;

class BlogController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $blogs = Blog::with(['categories', 'comments'])
                    ->where('active', 1)
                    ->latest()
                    ->paginate(6);
                    // ->get();
    $categories = Category::whereHas('blogs', function($q){
      $q->where('active', 1);
    })->get();
    return view('pages.blog.blog', compact('blogs', 'categories'));
  }
  /**
   * Show the post details.
   *
   * @return \Illuminate\Http\Response
   */
  public function details($id)
  {
    $blog = Blog::where('active', 1)->findOrFail($id);
    $comments = $blog->comments()->get();
    return view('pages.blog.details', compact('blog', 'comments'));
  }
  /**
   * Store comments
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store_comment(StoreComment $request, $id)
  {
    $blog = Blog::where('active', 1)->findOrFail($id);
    $comment = \Auth::user()->comments()->create( $request->input() );
    $blog->comments()->attach($comment->id);
    return redirect()->route('blog.details', ['id' => $id]);
  }
  /**
   * Show posts for specific_category.
   *
   * @return \Illuminate\Http\Response
   */
  public function specific_category($category)
  {
    $blogs = Blog::with(['categories', 'comments'])
                    ->where('active', 1)
                    ->whereHas('categories', function($q) use ($category){
                      $q->where('id', $category);
                    })->latest()
                    ->paginate(6);
    if( $blogs->isEmpty() ){
      abort(404);
    }
    $categories = Category::whereHas('blogs', function($q){
      $q->where('active', 1);
    })->get();
    return view('pages.blog.blog', compact('blogs', 'categories'));
  }
  /**
   * Remove comment.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy_comment($id)
  {
      $comment = Comment::findOrFail($id);
      $comment->delete();
      $comment->blog()->detach($id);
      return back();
  }
}
