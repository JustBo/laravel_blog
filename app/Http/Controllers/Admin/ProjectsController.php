<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Category;
use App\Http\Requests\StoreProject;

class ProjectsController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $projects = Project::with('categories')->get();
    return view('admin.projects.projects', compact('projects'));
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id){
    $categories = Category::pluck('name', 'id');
    $project = Project::findOrFail( $id );
    return view('admin.projects.edit', compact('project', 'categories'));
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    $categories = Category::pluck('name', 'id');
    return view('admin.projects.create', compact('categories'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreProject $request){
    $project = Project::create( $request->input() );
    $project->categories()->sync($request->input('category_list'));
    return redirect()->route('admin.projects');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(StoreProject $request, $id){
    $project = Project::findOrFail($id);
    $project->update( $request->input() );
    $project->categories()->sync($request->input('category_list'));
    return redirect()->route('admin.projects');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $project = Project::findOrFail($id);
      $project->delete();
      return redirect()->route('admin.projects');
  }
}
