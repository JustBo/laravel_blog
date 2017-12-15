<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(){
      $users = User::all();
      return view('admin.user', compact('users'));
    }

    public function destroy($id){
      $user = User::findOrFail($id);
      $user->delete();
      return back();
    }
}
