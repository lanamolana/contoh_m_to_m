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

<strong>Profile</strong>
</div>

<table class="table table-striped">
	<tr>
		<th>Username</th>
		<td>{{ $profile->user->username }}</td>
	</tr>
		<tr>
		<th>Password</th>
		<td>{{ $profile->user->password }}</td>
	</tr>
		<tr>
		<th>Level</th>
		<td>{{ $profile->user->level }}</td>
	</tr>
	<tr>
		<th>Nama</th>
		<td>{{ $profile->nama }}</td>
	</tr>
	<tr>
		<th>NIP</th>
		<td>{{ $profile->nip }}</td>
	</tr>
	<tr>
		<th>Alamat</th>
		<td>{{ $profile->alamat }}</td>
	</tr>
	<tr>
		<th>Email</th>
		<td>{{ $profile->email }}</td>
	</tr>
	<tr>
		<th>Telp</th>
		<td>{{ $profile->telp }}</td>
	</tr>
	<tr>
		<th>User ID</th>
		<td>{{ $profile->user_id }}</td>
	</tr>
</table>
</div>
</div>
</div>
</div>
@endsection

