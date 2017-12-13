@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Experience</h1>
  <h2>{{ $experience->title }}</h2>
  {!! Form::model($experience, ['method' => 'PUT', 'route' => ['admin.experience.update', $experience->id]]) !!}
    @include('admin.education._form', ['submit_button' => 'Update'])
  {!! Form::close() !!}
@endsection
