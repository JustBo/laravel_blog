<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Http\Requests\StoreEducation;

class EducationController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $educations = Education::all();
    return view('admin.education.education', compact('educations'));
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id){
    $education = Education::findOrFail( $id );
    return view('admin.education.edit', compact('education'));
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    return view('admin.education.create');
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreEducation $request){
    $education = Education::create( $request->input() );
    return redirect()->route('admin.education');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(StoreEducation $request, $id){
    $education = Education::findOrFail($id);
    $education->update( $request->input() );
    return redirect()->route('admin.education');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $education = Education::findOrFail($id);
      $education->delete();
      return redirect()->route('admin.education');
  }
}
