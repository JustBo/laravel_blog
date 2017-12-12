@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Create new skill</h1>
  {!! Form::model($skill = new \App\Models\Skill, ['route' => 'admin.skills.store']) !!}
    @include('admin.skills._form', ['submit_button' => 'Create'])
  {!! Form::close() !!}
@endsection
