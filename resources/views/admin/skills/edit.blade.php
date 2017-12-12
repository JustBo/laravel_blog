@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Skill</h1>
  <h2>{{ $skill->title }}</h2>
  {!! Form::model($skill, ['route' => ['admin.skills.update', $skill->id]]) !!}
    @include('admin.skills._form', ['submit_button' => 'Update'])
  {!! Form::close() !!}
@endsection
