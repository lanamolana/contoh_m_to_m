<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{	
	protected $table = "mahasiswa";
    public $timestamps = false;
	protected $guarded = array("id");

	public function buku()
	{
		return $this->belongsToMany("App\Buku", "peminjaman");
	}

}
