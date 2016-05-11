<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class RegisterMhsRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		 "nama"	   =>"required",
		 "nim"	   =>"required|numeric|unique:mahasiswa,nim",
		 "fakultas"=>"required",
		 "prodi"   =>"required",
		 "alamat"  =>"required",
		 "email"   =>"required|email",
		 "telp"	   =>"required|numeric",
		];
	}
}