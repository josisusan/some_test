<?php
class UsersController extends BaseController {
  protected $layout = "layouts.main";

  public function __construct(){
    $this->beforeFilter('csrf', array('on'=>'post'));
    $this->beforeFilter('admin');
  }

  public function index(){
    $users = User::getUserExceptAdmin()->get();
    $this->layout->content = View::make('users.index')->with('users', $users);
  }

  public function edit($id){
    $user = User::find($id);
    if(is_null($user)){
      return Redirect::route('users.index');
    }
    $this->layout->content = View::make('users.edit')->with('user', $user); 
  }

  public function update($id){
    $input = Input::all();
    // $validator =  Validator::make($input, User::$rules);
    User::$rules['email'] = 'required|unique:users,email,' .$id . ',id';
    User::$rules['password'] = '';
    User::$rules['password_confirmation'] = '';
    $validator =  Validator::make($input, User::$rules);
    if($validator->passes()){
      $user = User::find($id);
      $user->update($input);
      return Redirect::route('users.show', $id)->with('message', 'Successfully updated');
    }
    return Redirect::route('users.edit',$id)->withInput()
                                            ->withErrors($validator)
                                            ->with('message', 'There were some errors');
  }

  public function show($id){
    $user = User::find($id);
    if(is_null($user)){
      return Redirect::route('users.index');
    }
    $this->layout->content = View::make('users.show')->with('user', $user);
  }

  public function destroy($id){
    $user = User::find($id);
    if(is_null($user)){
      return Redirect::route('users.index')->with('message', 'No user found');
    }
    $user->delete();
    return Redirect::route('users.index')->with('message', 'User deleted');
  }

  public function getRegister() {
    $this->layout->content = View::make('users.register');
  }

  public function store(){
    $validator = Validator::make(Input::all(), User::$rules);
    

    if($validator->passes()){
      $user = new User;
      $user->first_name = Input::get('first_name');
      $user->last_name = Input::get('last_name');
      $user->email = Input::get('email');
      $user->password = Hash::make(Input::get('password'));
      $user->save();
 
      return Redirect::to('users/login')->with('message', 'Thanks for registering!'); 
    } else {
      return Redirect::to('users/register')->with('message', 'The following errors occurred')
                                           ->withErrors($validator)
                                           ->withInput();
    }
  }

}
