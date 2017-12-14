@extends('layouts.app')

@section('content')
  {{-- {{dd($blogs)}} --}}
  <div class="container">
    <div class="blog-inner">
      @foreach ($blogs as $blog)
        <div class="row post">
          <div class="col-md-6">
            <img src="{{ asset('/storage/images/blog/'.$blog->icon) }}" alt="blog-photo">
          </div>
          <div class="col-md-6">
            <div class="post-info">
              <div class="post-title">
                <a href="{{ route('blog.details', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
              </div>
              <div class="post-description">
                {{ $blog->description }}
              </div>
              {{ $blog->categories->first()->name }}
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

@endsection
