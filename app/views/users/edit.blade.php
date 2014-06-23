{{ Form::open(array('method' => 'PATCH', 'route' => array('users.update', $user->id), 'class' => 'form-signup')) }}
  <h2 class="form-signup-heading">Edit User</h2>
  <ul>
    @foreach($errors->all() as $error)
      <li> {{ $error }} </li>
    @endforeach
  </ul>

    <div class="form-group">
      {{ Form::text('first_name', $user->first_name, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
    </div>
    <div class="form-group">
      {{ Form::text('last_name', $user->last_name, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
    </div>
    <div class="form-group">
      {{ Form::text('email', $user->email, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
    </div>
  {{ Form::submit('Edit', array('class'=>'btn btn-lg btn-primary btn-block'))}}
{{ Form::close() }}