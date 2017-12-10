@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Categories</h1>
  <div class="list-group">
   @foreach ($categories as $key => $category)
     <a class="list-group-item item" href="{{ route('admin.category.edit', ['id' => $category->id]) }}">
        <div class="row">
          <div class="col-md-3">
            {{ $category->id }}
          </div>
          <div class="col-md-9">
            {{ $category->name }}
          </div>
        </div>
      </a>
   @endforeach
 </div>
 <div class="add-new-btn">
   <a href="{{ route('admin.category.create') }}" class="btn btn-primary pull-right">
     Add new
   </a>
 </div>
@endsection
