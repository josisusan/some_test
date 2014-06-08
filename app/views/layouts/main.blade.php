<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Hospital</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/main.css') }}
  </head>
 
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">  
            <li>{{ HTML::link('users/register', 'Register') }}</li>   
            <li>{{ HTML::link('users/login', 'Login') }}</li>   
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      @if(Session::has('message'))
        <p class="alert">{{ Session::get('message') }}</alert>
      @endif

      {{ $content }}
    </div>

    {{ HTML::script('js/jquery-1.11.1.min.js') }}
    {{ HTML::script('js/bootstrap.<min class="js"></min>') }}
  </body>
</html>