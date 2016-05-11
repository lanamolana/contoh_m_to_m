@extends('template.one-column')
@section("content")
<br>
<div class="text-center">
<h2>Daftar Buku</h2>
</div>

<div class="container">
<div class="col-md-12">
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Penerbit</th>
		<th>Tahun Terbit</th>
		<th>Kategori</th>
		<th>Tebal</th>
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
	</tr>
	@endforeach
</table>
</div>
</div>
</form>
@stop