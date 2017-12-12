@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Experience</h1>
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
   @foreach ($experiences as $key => $experience)
     <a class="list-group-item item" href="{{ route('admin.experience.edit', ['id' => $experience->id]) }}">
        <div class="row">
          <div class="col-md-1">
            {{ $experience->id }}
          </div>
          <div class="col-md-3">
            {{ $experience->place }}
          </div>
          <div class="col-md-3">
            {{ $experience->description }}
          </div>
          <div class="col-md-2">
            {{ $experience->start }}
          </div>
          <div class="col-md-2">
            {{ $experience->end }}
          </div>
          <div class="col-md-1">
            {!!Form::open(['route' => ['admin.experience.destroy', $experience->id], 'method' => 'POST'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
            {!!Form::close()!!}
          </div>
        </div>
      </a>
   @endforeach
 </div>
 <div class="add-new-btn">
   <a href="{{ route('admin.experience.create') }}" class="btn btn-primary pull-right">
     Add new
   </a>
 </div>
@endsection
