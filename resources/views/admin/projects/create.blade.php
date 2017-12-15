@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Create new project</h1>
  {!! Form::model($project = new \App\Models\Project, ['route' => 'admin.projects.store', 'files' => true]) !!}
    @include('admin.projects._form', ['submit_button' => 'Create'])
  {!! Form::close() !!}
@endsection
