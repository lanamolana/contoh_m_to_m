<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class RegisterRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		 "username"=>"required|min:4|max:12|unique:user,username",
		 "password"=>"required|min:6|max:12",
		 "nip"	   =>"numeric|unique:profile",
		 "telp"	   =>"numeric",
		];
	}
}