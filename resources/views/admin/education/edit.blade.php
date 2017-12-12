@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Education</h1>
  <h2>{{ $education->title }}</h2>
  {!! Form::model($education, ['route' => ['admin.education.update', $education->id]]) !!}
    @include('admin.education._form', ['submit_button' => 'Update'])
  {!! Form::close() !!}
@endsection
