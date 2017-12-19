@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="project-inner">
      <div class="category-list text-center">
        <ul>
          @foreach ($categories as $key => $category)
            <li data-id="{{ $category->id }}">{{ $category->name }}</li>
          @endforeach
        </ul>
      </div>
      @foreach ($projects as $project)
        <div class="row post">
          <div class="col-md-4 image-container">
            <img src="{{ asset('/storage/images/projects/'.$project->icon) }}" alt="project-photo">
            <a href="{{ route('project.details', ['id' => $project->id]) }}"></a>
          </div>
          <div class="col-md-8">
            <div class="post-info text-center">
              <div class="post-category">
                <div>{{ $project->categories->first()->name }}</div>
              </div>
              <div class="post-title">
                <a href="{{ route('project.details', ['id' => $project->id]) }}">{{ $project->title }}</a>
              </div>
              <div class="post-description">
                {{ $project->description }}
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
