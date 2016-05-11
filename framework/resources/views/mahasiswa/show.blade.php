@extends('template.one-column')
@section('content')
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-7 col-md-offset-2">
<div class="panel panel-primary">
<div class="panel-heading">
<div class="text-right">
<button type="submit" class="btn btn-info btn-sm" onclick="self.history.back()">
<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>     Kembali</button>
</div>
<strong>Detail Mehasiswa</strong>                                         
</div>

<table class="table table-striped">
	<tr>
		<th>Username</th>
		<td>{{ $mahasiswa->nama }}</td>
	</tr>
		<tr>
		<th>Password</th>
		<td>{{ $mahasiswa->nim }}</td>
	</tr>
		<tr>
		<th>Level</th>
		<td>{{ $mahasiswa->tgl_lahir }}</td>
	</tr>
	<tr>
		<th>Nama</th>
		<td>{{ $mahasiswa->fakultas }}</td>
	</tr>
	<tr>
		<th>NIP</th>
		<td>{{ $mahasiswa->prodi }}</td>
	</tr>
	<tr>
		<th>Alamat</th>
		<td>{{ $mahasiswa->alamat }}</td>
	</tr>
	<tr>
		<th>Email</th>
		<td>{{ $mahasiswa->email }}</td>
	</tr>
	<tr>
		<th>Telp</th>
		<td>{{ $mahasiswa->telp }}</td>
	</tr>
</table>
</div>
</div>
</div>
</div>
@endsection

