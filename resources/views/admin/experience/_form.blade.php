<div class="form-group">
  {!! Form::label('place', 'Place:'); !!}
  {!! Form::text('place', null , ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('start', 'Start:'); !!}
  {!! Form::date('start', null , ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('end', 'End:'); !!}
  {!! Form::date('end', null , ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('description', 'Description:'); !!}
  {!! Form::text('description', null , ['class' => 'form-control']) !!}
</div>
<div class="input-group">
  {!! Form::submit($submit_button, ['class' => 'btn btn-primary form-control']) !!}
</div>
