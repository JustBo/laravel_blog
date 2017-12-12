<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Http\Requests\StoreExperience;

class ExperienceController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $experiences = Experience::all();
    return view('admin.experience.experience', compact('experiences'));
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id){
    $experience = Experience::findOrFail( $id );
    return view('admin.experience.edit', compact('experience'));
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    return view('admin.experience.create');
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreExperience $request){
    $experience = Experience::create( $request->input() );
    return redirect()->route('admin.experience');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(StoreExperience $request, $id){
    $experience = Experience::findOrFail($id);
    $experience->update( $request->input() );
    return redirect()->route('admin.experience');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $experience = Experience::findOrFail($id);
      $experience->delete();
      return redirect()->route('admin.experience');
  }
}
