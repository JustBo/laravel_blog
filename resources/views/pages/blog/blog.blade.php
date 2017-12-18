@extends('layouts.app')

@section('content')
  {{-- {{dd($blogs)}} --}}
  <div class="container">
    <div class="blog-inner">
      <div class="category-list text-center">
        <ul>
          @foreach ($categories as $key => $category)
            <li data-id="{{ $category->id }}">{{ $category->name }}</li>
          @endforeach
        </ul>
      </div>
      @foreach ($blogs as $blog)
        <div class="row post">
          <div class="col-md-4 image-container">
            <img src="{{ asset('/storage/images/blog/'.$blog->icon) }}" alt="blog-photo">
            <a href="{{ route('blog.details', ['id' => $blog->id]) }}"></a>
          </div>
          <div class="col-md-8">
            <div class="post-info text-center">
              <div class="post-category">
                <div>{{ $blog->categories->first()->name }}</div>
              </div>
              <div class="post-title">
                <a href="{{ route('blog.details', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
              </div>
              <div class="post-description">
                {{ $blog->description }}
              </div>
              {{-- <div class="readmore-btn">
                <a href="{{ route('blog.details', ['id' => $blog->id]) }}">read more</a>
              </div> --}}
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

@endsection
