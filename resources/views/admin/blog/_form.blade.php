<div class="form-group">
  {!! Form::label('title', 'Title:'); !!}
  {!! Form::text('title', null , ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('description', 'Description:'); !!}
  {!! Form::text('description', null , ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('icon', 'Icon:'); !!}
  {!! Form::file('icon', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('body', 'Body:'); !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group toggle-button">
  Active:
  {!! Form::checkbox('active', '0', null, ['class' => 'hidden']) !!}
  <label class="switch">
    {!! Form::checkbox('active', '1', null) !!}
    <span class="slider round"></span>
  </label>
</div>
<div class="form-group">
  {!! Form::label('category_list', 'Category:'); !!}
  {!! Form::select('category_list', $categories , null, ['class' => 'form-control']) !!}
</div>
<div class="input-group">
  {!! Form::submit($submit_button, ['class' => 'btn btn-primary form-control']) !!}
</div>
