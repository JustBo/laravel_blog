@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Blog</h1>
  <h2>{{ $blog->title }}</h2>
  {!! Form::model($blog, ['method' => 'PUT', 'route' => ['admin.blog.update', $blog->id], 'files' => true]) !!}
    @include('admin.blog._form', ['submit_button' => 'Update'])
  {!! Form::close() !!}
@endsection

@section('scripts')
  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script>
    CKEDITOR.replace('summary-ckeditor')
  </script>
@endsection
