<div class="form-group">
  {!! Form::label('name', 'Name:'); !!}
  {!! Form::text('name', null , ['class' => 'form-control']) !!}
</div>
<div class="input-group">
  {!! Form::submit($submit_button, ['class' => 'btn btn-primary form-control']) !!}
</div>
