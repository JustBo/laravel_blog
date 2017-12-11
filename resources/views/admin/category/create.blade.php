@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Create new category</h1>
  {!! Form::model($category = new \App\Models\Category ,['route' => 'admin.category.store']) !!}
    @include('admin.category._form', ['submit_button' => 'Create'])
  {!! Form::close() !!}
@endsection
