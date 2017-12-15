@extends('layouts.app')

@section('content')
  <div class="container details">
    <div class="blog-inner">
      <h2>{{ $blog->title }}</h2>
      <img src="{{ asset('/storage/images/blog/'.$blog->icon) }}" alt="blog-photo">
      {{ $blog->categories->first()->name }}
      <div class="post-body">
        {{ $blog->body }}
      </div>
    </div>
    <div class="post-comments">
      @foreach ($comments as $comment)
        <div class="row user-comment">
          <div class="col-md-3">
            <img src="{{ $comment->user->icon }}" class="user-avatar" alt="user-avatar">
            Avatar{{ $comment->user_id }}
            <div>{{ $comment->user->name }}</div>
            {{-- {{ $comment->user_id }} --}}
          </div>
          <div class="col-md-8">
            {{ $comment->body }}
          </div>
          <div class="col-md-1">
            @if ((Auth::user() && Auth::user()->id == $comment->user->id) || Auth::guard('admin')->check())
              {!!Form::open(['route' => ['blog.destroy_comment', $comment->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
              {!!Form::close()!!}
            @endif
          </div>
        </div>
      @endforeach
    </div>
    @if (Auth::user())
      @include('pages.blog.comment_form')
    @endif
  </div>
@endsection
