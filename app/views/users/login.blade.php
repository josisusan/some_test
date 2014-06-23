{{ Form::open(array('route' => 'postLogin', 'class' => 'form-signup')) }}
  <h2 class="form-login-heading">Login</h2>
    <div class="form-group">
      {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
    </div>
    <div class="form-group">
      {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
    </div>
  {{ Form::submit('Register', array('class'=>'btn btn-lg btn-primary btn-block'))}}
{{ Form::close() }}