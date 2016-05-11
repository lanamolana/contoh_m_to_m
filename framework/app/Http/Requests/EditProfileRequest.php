<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class EditProfileRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		 "nama"	   =>"required",
		 "alamat"  =>"required",
		 "email"   =>"required|email",
		 "telp"	   =>"required|numeric",
		];
	}
}