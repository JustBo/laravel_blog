@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Create new category</h1>
  {!! Form::open(['route' => 'admin.category.store']) !!}
  <div class="form-group">
    {!! Form::label('name', 'Name:'); !!}
    {!! Form::text('name', null , ['class' => 'form-control']) !!}
  </div>
  <div class="input-group">
    {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
  </div>
  {!! Form::close() !!}
@endsection
