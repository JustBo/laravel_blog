@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Skills</h1>
  <div class="list-group">
    <div class="list-group-item header">
       <div class="row">
         <div class="col-md-2">
           Id
         </div>
         <div class="col-md-4">
           Skill
         </div>
         <div class="col-md-4">
           Progress
         </div>
       </div>
     </div>
   @foreach ($skills as $key => $skill)
     <a class="list-group-item item" href="{{ route('admin.skills.edit', ['id' => $skill->id]) }}">
        <div class="row">
          <div class="col-md-2">
            {{ $skill->id }}
          </div>
          <div class="col-md-4">
            {{ $skill->skill }}
          </div>
          <div class="col-md-4">
            {{ $skill->progress }}
          </div>
          <div class="col-md-1">
            {!!Form::open(['route' => ['admin.skills.destroy', $skill->id], 'method' => 'POST'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
            {!!Form::close()!!}
          </div>
        </div>
      </a>
   @endforeach
 </div>
 <div class="add-new-btn">
   <a href="{{ route('admin.skills.create') }}" class="btn btn-primary pull-right">
     Add new
   </a>
 </div>
@endsection
