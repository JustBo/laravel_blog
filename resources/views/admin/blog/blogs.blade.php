@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Blog</h1>
  <div class="list-group">
   @foreach ($blogs as $key => $blog)
     <a class="list-group-item item" href="{{ route('admin.blog.edit', ['id' => $blog->id]) }}">
        <div class="row">
          <div class="col-md-4">
            {{ $blog->id }}
          </div>
          <div class="col-md-4">
            {{ $blog->title }}
          </div>
          <div class="col-md-4">
            {{ $blog->description }}
          </div>
        </div>
      </a>
   @endforeach
 </div>
 <div class="add-new-btn">
   <a href="{{ route('admin.blog.create') }}" class="btn btn-primary pull-right">
     Add new
   </a>
 </div>
@endsection
