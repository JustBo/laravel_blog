@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Project</h1>
  <h2>{{ $project->title }}</h2>
  {!! Form::model($project, ['method' => 'PUT', 'route' => ['admin.projects.update', $project->id]]) !!}
    @include('admin.projects._form', ['submit_button' => 'Update'])
  {!! Form::close() !!}
@endsection
