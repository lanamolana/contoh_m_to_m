<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facedes\Validator;
use Illuminate\Routing\Controller as BaseController;
use App\User;

class AuthController extends BaseController {

	public function loginForm() {
		return view('user.form-login');
	}

	public function prosesLogin(LoginRequest $request) {
	$user=User::
	where ("username",$_POST['username'])->
	where ("password",$_POST['password'])->
	get();
    if($user->count()==0){
    	return redirect()->to('/abort');
}
else
{
	\Auth::login($user->first());
	return redirect()->to('/success');
}
}

	public function logout() {
		\Auth::logout();
		return redirect()->to('/escape');
	}

	public function __construct() {
		$this->middleware('guest', array(
			'only'=>array('loginForm', 'prosesLogin')
			));
		$this->middleware('auth', array('only' =>array('logout')));
	} 
}