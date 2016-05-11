<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class BukuRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		'judul'    		=>"required",
		'pengarang'     =>"required",
		'penerbit' 		=>"required",
		'thn_terbit' 	=>"required|digits:4",
		'kategori' 		=>"required",
		'tebal'			=>"required|numeric",
		];
	}
}