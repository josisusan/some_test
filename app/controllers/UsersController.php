<?php
class UsersController extends BaseController {
  protected $layout = "layouts.main";

  public function __construct(){
    $this->beforeFilter('csrf', array('on'=>'post'));
    $this->beforeFilter('admin');
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
      // $user->save();
 
      return Redirect::to('users/login')->with('message', 'Thanks for registering!'); 
    } else {
      return Redirect::to('users/register')->with('message', 'The following errors occurred')
                                           ->withErrors($validator)
                                           ->withInput();
    }
  }

}
