<div class="form-group">
  {!! Form::label('skill', 'Skill:'); !!}
  {!! Form::text('skill', null , ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('progress', 'Progress:'); !!}
  {!! Form::number('progress', null , ['class' => 'form-control']) !!}
</div>
<div class="input-group">
  {!! Form::submit($submit_button, ['class' => 'btn btn-primary form-control']) !!}
</div>
