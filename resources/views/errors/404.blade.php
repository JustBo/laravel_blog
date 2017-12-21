<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page not found</title>
    <style media="screen">
      body{
        margin:0;
      }
      .error-page-404{
        width:100%;
        height: 100vh;
        background-color: #1b242f;
        display: flex;
        justify-content: center;
      }
      img{
        position: absolute;
        bottom: 0;
      }
      h2,h3{
        margin:0;
        color:white;
        text-align:center;
        position: relative;
        z-index: 3;
        font-size: 48px;
        padding-top: 20px;
      }
      .banner{
        position: absolute;
        width:100%;
        height:100%;
        background-color: #1b242f6b;
        z-index:2;
      }
      @media screen and (max-width: 599px) {
        img{
          width:80%;
        }
      }
    </style>
  </head>
  <body>
    <div class="error-page-404">
      <div class="banner">

      </div>
      <div class="">
        <h2>Oops! 404</h2>
        <h3>This page does not exist</h3>
      </div>
      <img src="{{ asset('images/404.gif') }}" alt="travolta search">
    </div>
  </body>
</html>
