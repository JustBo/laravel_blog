<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Category;

class ProjectsController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $projects = Project::with(['categories'])
                        ->where('active', 1)
                        ->latest()
                        ->paginate(7);
    $categories = Category::whereHas('projects', function($q){
      $q->where('active', 1);
    })->get();
    return view('pages.project.projects', compact('projects', 'categories'));
  }
  /**
   * Show the specific project.
   *
   * @return \Illuminate\Http\Response
   */
  public function details($id)
  {
    $project = Project::where('active', 1)->findOrFail($id);
    return view('pages.project.details', compact('project'));
  }
}
