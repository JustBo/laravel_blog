@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Create new blog</h1>
  {!! Form::model($blog = new \App\Models\Blog, ['route' => 'admin.blog.store', 'files' => true]) !!}
    @include('admin.blog._form', ['submit_button' => 'Create'])
  {!! Form::close() !!}
@endsection
