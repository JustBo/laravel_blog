<div class="form-group">
  {!! Form::label('title', 'Title:'); !!}
  {!! Form::text('title', null , ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('description', 'Description:'); !!}
  {!! Form::text('description', null , ['class' => 'form-control']) !!}
</div>
@if ($submit_button == "Update")
  <div class="form-group">
    <img src="{{ asset('/storage/images/projects/'.$project->icon) }}" alt="project-photo">
  </div>
@endif
<div class="form-group">
  {!! Form::label('icon', 'Icon:'); !!}
  {!! Form::file('icon', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('url', 'Url:'); !!}
  {!! Form::text('url', null , ['class' => 'form-control']) !!}
</div>
<div class="form-group toggle-button">
  Active:
  {!! Form::checkbox('active', '0', true, ['class' => 'hidden']) !!}
  <label class="switch">
    {!! Form::checkbox('active', '1', true) !!}
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
