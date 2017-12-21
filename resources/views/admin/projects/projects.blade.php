@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Projects</h1>
  <div class="list-group">
    <div class="list-group-item header">
       <div class="row">
         <div class="col-md-1">
           Id
         </div>
         <div class="col-md-1">
           Icon
         </div>
         <div class="col-md-4">
           Title
         </div>
         <div class="col-md-3">
           Description
         </div>
         <div class="col-md-2">
           Category
         </div>
       </div>
     </div>
   @foreach ($projects as $key => $project)
     <a class="list-group-item item" href="{{ route('admin.projects.edit', ['id' => $project->id]) }}">
        <div class="row">
          <div class="col-md-1">
            {{ $project->id }}
          </div>
          <div class="col-md-1">
            <img src="{{ asset('/storage/images/projects/'.$project->icon) }}" alt="project-photo">
          </div>
          <div class="col-md-4">
            {{ $project->title }}
          </div>
          <div class="col-md-3">
            {{ $project->description }}
          </div>
          <div class="col-md-2">
            {{ $project->categories->first()->name }}
          </div>
          <div class="col-md-1">
            {!!Form::open(['route' => ['admin.projects.destroy', $project->id], 'method' => 'POST'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
            {!!Form::close()!!}
          </div>
        </div>
      </a>
   @endforeach
 </div>
 {{ $projects->links() }}
 <div class="add-new-btn">
   <a href="{{ route('admin.projects.create') }}" class="btn btn-primary pull-right">
     Add new
   </a>
 </div>
@endsection
