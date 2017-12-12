@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Create new education</h1>
  {!! Form::model($education = new \App\Models\Education, ['route' => 'admin.education.store']) !!}
    @include('admin.education._form', ['submit_button' => 'Create'])
  {!! Form::close() !!}
@endsection
