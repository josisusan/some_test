<h3>Users List</h3>
<table class="table table-stripped">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Action</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{ $user->first_name }}</td>
    <td>{{ $user->last_name }}</td>
    <td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}  
      {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id), 'class' => 'user_destroy_button')) }}                       
          {{ Form::submit('Delete', array('class'=> 'btn btn-danger')) }}
      {{ Form::close() }}
    </td>
  </tr>
  @endforeach
</table>