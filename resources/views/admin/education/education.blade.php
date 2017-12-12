@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Skills</h1>
  <div class="list-group">
    <div class="list-group-item header">
       <div class="row">
         <div class="col-md-1">
           Id
         </div>
         <div class="col-md-3">
           Place
         </div>
         <div class="col-md-3">
           Description
         </div>
         <div class="col-md-2">
           Start
         </div>
         <div class="col-md-2">
           End
         </div>
       </div>
     </div>
   @foreach ($educations as $key => $education)
     <a class="list-group-item item" href="{{ route('admin.education.edit', ['id' => $education->id]) }}">
        <div class="row">
          <div class="col-md-1">
            {{ $education->id }}
          </div>
          <div class="col-md-3">
            {{ $education->place }}
          </div>
          <div class="col-md-3">
            {{ $education->description }}
          </div>
          <div class="col-md-2">
            {{ $education->start }}
          </div>
          <div class="col-md-2">
            {{ $education->end }}
          </div>
          <div class="col-md-1">
            {!!Form::open(['route' => ['admin.education.destroy', $education->id], 'method' => 'POST'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
            {!!Form::close()!!}
          </div>
        </div>
      </a>
   @endforeach
 </div>
 <div class="add-new-btn">
   <a href="{{ route('admin.education.create') }}" class="btn btn-primary pull-right">
     Add new
   </a>
 </div>
@endsection
