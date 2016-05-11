<?php
namespace App\Http\Controllers;

use App\Buku;
use App\Http\Requests\BukuRequest;
use Illuminate\Routing\Controller as BaseController;
class BukuController extends BaseController
{
	public function create()
	{
		$buku= new Buku;
		return view("buku/form-addBuku")
		->with("url",url("/book/store"))
		->with("buku",$buku)
		;
	}

	public function store(BukuRequest $request)
	{
		$buku = new Buku;
		$buku->judul		=$_POST['judul'];
		$buku->pengarang	=$_POST['pengarang'];
		$buku->penerbit		=$_POST['penerbit'];
		$buku->thn_terbit	=$_POST['thn_terbit'];
		$buku->kategori		=$_POST['kategori'];
		$buku->tebal		=$_POST['tebal'];
		$buku->save();
		return redirect(url("/books"));
	}

	public function index()
	{
		return view("buku.index", ['buku'=>Buku::all()]);
	}

	public function show() {
		return view("buku.books", ['buku'=>Buku::all()]);
	}

	 public function edit($id) {
		$buku =Buku::find($id);
		return view("buku/form-editBuku")
		->with("url",url("/books/$id/update"))
		->with("buku",$buku)
		;
	}

	public function update(BukuRequest $request, $id) {
		$buku= Buku::find($id);
		$buku->judul		=$_POST['judul'];
		$buku->pengarang	=$_POST['pengarang'];
		$buku->penerbit		=$_POST['penerbit'];
		$buku->thn_terbit	=$_POST['thn_terbit'];
		$buku->kategori		=$_POST['kategori'];
		$buku->tebal		=$_POST['tebal'];
		$buku->save();
		return redirect(url("/books"));
	}

	public function delete($id){
		Buku::destroy($id);
		return redirect(url("/books"));
	}

}
?>
