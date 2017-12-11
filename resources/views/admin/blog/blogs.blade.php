@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Blog</h1>
  <div class="list-group">
    <div class="list-group-item header">
       <div class="row">
         <div class="col-md-1">
           Id
         </div>
         <div class="col-md-4">
           Title
         </div>
         <div class="col-md-4">
           Description
         </div>
         <div class="col-md-2">
           Category
         </div>
       </div>
     </div>
   @foreach ($blogs as $key => $blog)
     <a class="list-group-item item" href="{{ route('admin.blog.edit', ['id' => $blog->id]) }}">
        <div class="row">
          <div class="col-md-1">
            {{ $blog->id }}
          </div>
          <div class="col-md-4">
            {{ $blog->title }}
          </div>
          <div class="col-md-4">
            {{ $blog->description }}
          </div>
          <div class="col-md-2">
            {{ $blog->categories->first()->name }}
          </div>
          <div class="col-md-1">
            {!!Form::open(['route' => ['admin.blog.destroy', $blog->id], 'method' => 'POST'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
            {!!Form::close()!!}
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
