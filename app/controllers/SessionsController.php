<?php
class SessionsController extends BaseController {
  protected $layout = "layouts.main";

  public function __construct(){
    $this->beforeFilter('csrf', array('on'=>'post'));
  }

  public function getLogin() {
    $this->layout->content = View::make('users.login');
  }

  public function postLogin() {
    $user = array(
      'email'     => Input::get('email'),
      'password'  => Input::get('password')
    );
    if(Auth::attempt($user)){
      return Redirect::to('/users/register')->with('message', 'Signed In');
    }
    return Redirect::to('/');
  }

  public function getLogOut(){
    Auth::logout();
    return Redirect::to('/');
  }
}