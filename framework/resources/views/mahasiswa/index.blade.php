@extends('template.one-column')
@section("content")
<br>

<div class="container">
<div class="col-md-12">
<h2>Daftar Member</h2>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>NIM</th>
		<th>Action</th>
		<th>Operation</th>
	</thead>
	@foreach($mahasiswa as $index=>$mahasiswa)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $mahasiswa->nama }}</th>
		<th>{{ $mahasiswa->nim }}</th>
		<th>
			<a href="/members/{{ $mahasiswa->id }}"><button class="btn btn-info btn-sm">
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"> Info</span></button></a>
			<a href="{{ url("/members/$mahasiswa->id/edit")}}"><button class="btn btn-success btn-sm">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"> Ubah</span></button></a>
			<a href="{{ url("/members/$mahasiswa->id/delete")}}"><button class="btn btn-danger btn-sm">
			<span class="glyphicon glyphicon-trash" aria-hidden="true"> Hapus</span>
			</button></a>	
		</th>
		<th>
			<a href="{{ url("/members/$mahasiswa->id/pinjam")}}"><button class="btn btn-primary btn-sm">
			<span class="glyphicon glyphicon-book" aria-hidden="true"> Peminjaman</span></button></a>	
		</th>
	</tr>
	@endforeach
</table>
</form>
@stop