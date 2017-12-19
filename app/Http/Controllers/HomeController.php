<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Project;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::all()->sortByDesc('id');
        $educations = Education::all()->sortByDesc('id');
        $skills = Skill::all();
        $projects = Project::where('active', 1)->latest()->limit(3)->get();

        return view('pages.home', compact('experiences', 'educations', 'skills', 'projects'));
    }
}
