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
          <div class="col-md-8">
            {{ $category->name }}
          </div>
          <div class="col-md-1">
            {!!Form::open(['route' => ['admin.category.destroy', $category->id], 'method' => 'POST'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
            {!!Form::close()!!}
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
