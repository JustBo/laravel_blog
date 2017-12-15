@extends('admin.layouts.admin_app')

@section('content')
  <h1>Users</h1>
  <div class="list-group">
    <div class="list-group-item header">
       <div class="row">
         <div class="col-md-1">
           Id
         </div>
         <div class="col-md-3">
           Icon
         </div>
         <div class="col-md-3">
           Name
         </div>
         <div class="col-md-3">
           E-mail
         </div>
         <div class="col-md-1">
           Created
         </div>
       </div>
     </div>
   @foreach ($users as $key => $user)
     <a class="list-group-item item" href="#">
        <div class="row">
          <div class="col-md-1">
            {{ $user->id }}
          </div>
          <div class="col-md-3">
            <img src="{{ $user->icon }}" alt="user-photo">
          </div>
          <div class="col-md-3">
            {{ $user->name }}
          </div>
          <div class="col-md-3">
            {{ $user->email }}
          </div>
          <div class="col-md-1">
            {!!Form::open(['route' => ['admin.user.destroy', $user->id], 'method' => 'POST'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
            {!!Form::close()!!}
          </div>
        </div>
      </a>
   @endforeach
 </div>
@endsection
