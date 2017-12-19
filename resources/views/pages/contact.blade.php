@extends('layouts.app')

@section('content')
  <div class="contact-wrap" style="background-image:url('{{ asset('images/contact.jpg') }}')">
    <div class="container">
      <div class="blog-inner">
        <div class="row">
          <div class="col-md-6">
            <h2>Contact me</h2>
              <p>If you have any questions, feel free to contact me.</p>
              <p>I am open to new projects, offers etc.</p>
              <div class="social-buttons">
                <ul>
                  <li class="social facebook"><a class="social-link" href="https://www.facebook.com/profile.php?id=100001600809506" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li class="social linkedin"><a class="social-link" href="https://www.facebook.com/profile.php?id=100001600809506" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li class="social instagram"><a class="social-link" href="https://www.facebook.com/profile.php?id=100001600809506" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li class="social github"><a class="social-link" href="https://www.facebook.com/profile.php?id=100001600809506" target="_blank"><i class="fa fa-github"></i></a></li>
                </ul>
              </div>
          </div>
          <div class="col-md-6">
            {!! Form::open(['route' => 'contact.send']) !!}
              <div class="form-group">
                {!! Form::text('name', null , ['class' => 'form-control contact-input', 'placeholder' => 'Your name']) !!}
              </div>
              <div class="form-group">
                {!! Form::text('email', null , ['class' => 'form-control contact-input', 'placeholder' => 'Your email']) !!}
              </div>
              <div class="form-group">
                {!! Form::textarea('description', null , ['class' => 'form-control contact-input', 'placeholder' => 'Write me about any project. I\'d love to work with you']) !!}
              </div>
              <div class="form-group">
                {!! Form::submit('Send', ['class' => 'btn form-control btn-add']) !!}
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
