<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class EditMhsRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		 "nama"	   =>"required",
		 "fakultas"=>"required",
		 "prodi"   =>"required",
		 "alamat"  =>"required",
		 "email"   =>"required|email",
		 "telp"	   =>"required|numeric",
		];
	}
}