<div class="row user-comment-textarea">
  <div class="col-xs-2 col-md-2">
    <img src="{{ Auth::user()->icon }}" class="user-avatar" alt="user-avatar">
    <div class="user-name text-center">{{ Auth::user()->name }}</div>
  </div>
  <div class="col-xs-9 col-md-9">
    {!! Form::open(['route' => ['blog.store_comment', 'id' => $blog->id]]) !!}
      <div class="form-group">
        {!! Form::label('body', 'Your comment:'); !!}
        {!! Form::textarea('body', null , ['class' => 'form-control', 'rows' => '5']) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('Add comment', ['class' => 'btn pull-right btn-add']) !!}
      </div>
    {!! Form::close() !!}
  </div>
</div>
