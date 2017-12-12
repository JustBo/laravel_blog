{!! Form::open(['route' => ['blog.store_comment', 'id' => $blog->id]]) !!}
  <div class="form-group">
    {!! Form::label('body', 'Your comment:'); !!}
    {!! Form::textarea('body', null , ['class' => 'form-control']) !!}
  </div>
  <div class="input-group">
    {!! Form::submit('Add comment', ['class' => 'btn btn-primary form-control']) !!}
  </div>
{!! Form::close() !!}
