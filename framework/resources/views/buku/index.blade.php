@extends('template.one-column')
@section("content")
<br>
<div class="text-center">
<h2>Daftar Buku</h2>
</div>
<br>
<div class="container">
<div class="col-md-12">

<br>
<a href="/book/create">
<button class="btn btn-primary btn-sm">
<span class="glyphicon glyphicon-plus" aria-hidden="true"> Tambah</span></button></a>
<br>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>ID</th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Penerbit</th>
		<th>Tahun Terbit</th>
		<th>Kategori</th>
		<th>Tebal</th>
		<th>Action</th>

	</thead>
	@foreach($buku as $index=>$buku)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $buku->judul }}</th>
		<th>{{ $buku->pengarang }}</th>
		<th>{{ $buku->penerbit }}</th>
		<th>{{ $buku->thn_terbit }}</th>
		<th>{{ $buku->kategori }}</th>
		<th>{{ $buku->tebal }}</th>
		<th>
			
			<a href="{{ url("/books/$buku->id/edit")}}"><button class="btn btn-success btn-sm">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"> Ubah</span></button></a>	
			<a href="{{ url("/books/$buku->id/delete")}}"><button class="btn btn-danger btn-sm">
			<span class="glyphicon glyphicon-trash" aria-hidden="true"> Hapus</span></button></a>
		</th>
	</tr>
	@endforeach
</table>
</div>
</div>
</form>
@stop