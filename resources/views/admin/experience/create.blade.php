@extends('admin.layouts.admin_app')

@section('content')
  <h1 class="text-center">Create new education</h1>
  {!! Form::model($experience = new \App\Models\Experience, ['route' => 'admin.experience.store']) !!}
    @include('admin.experience._form', ['submit_button' => 'Create'])
  {!! Form::close() !!}
@endsection
