@extends('layouts.app')

@section('content')
  <div class="container details">
    <div class="blog-inner blog-detail">
      <h2 class="text-center">{{ $blog->title }}</h2>
      <div class="sub-post-info text-center">
        {{ $blog->categories->first()->name }}
        |
        {{ \Carbon\Carbon::parse($blog->created_at)->format('j F Y') }}
      </div>
      <div class="blog-details-image">
        <img src="{{ asset('/storage/images/blog/'.$blog->icon) }}" alt="blog-photo">
      </div>
      <div class="post-description text-center">
        {{ $blog->description }}
      </div>
      <div class="post-body">
        {!! $blog->body !!}
      </div>
    </div>

    <div class="post-comments">
      @foreach ($comments as $comment)
        <div class="row user-comment">
          <div class="col-xs-2 col-md-2">
            <img src="{{ $comment->user->icon }}" class="user-avatar" alt="user-avatar">
            <div class="user-name text-center">{{ $comment->user->name }}</div>
            <div class="user-comment-time text-center">{{ \Carbon\Carbon::parse($comment->created_at)->format('j F Y H:i') }}</div>
          </div>
          <div class="col-xs-9 col-md-9">
            <div class="">{{ $comment->body }}</div>
          </div>
          <div class="col-xs-1 col-md-1">
            @if ((Auth::user() && Auth::user()->id == $comment->user->id) || Auth::guard('admin')->check())
              {!!Form::open(['route' => ['blog.destroy_comment', $comment->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('X', ['value' => 'delete', 'class' => 'btn btn-danger btn-sm'])}}
              {!!Form::close()!!}
            @endif
          </div>
        </div>
      @endforeach
    </div>
    @if (Auth::user())
      @include('pages.blog.comment_form')
    @else
      <p class="well well-sm">Login for living comment</p>
    @endif
  </div>
@endsection
