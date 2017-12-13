@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Category</h1>
  <h2>{{ $category->name }}</h2>
  {!! Form::model($category ,['method' => 'PUT', 'route' => ['admin.category.update', $category->id]]) !!}
    @include('admin.category._form', ['submit_button' => 'Update'])
  {!! Form::close() !!}
@endsection
