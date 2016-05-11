@extends('template.one-column')
@section("content")
<br>

<div class="container">
<div class="col-md-12">
<h2>Daftar Petugas</h2>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>NIP</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Telp</th>
		<th>Action</th>

	</thead>
	@foreach($profile as $index=>$profile)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $profile->nama }}</th>
		<th>{{ $profile->nip }}</th>
		<th>{{ $profile->alamat }}</th>
		<th>{{ $profile->email }}</th>
		<th>{{ $profile->telp }}</th>
		<th>
			<a href="/profile/{{ $profile->id }}"><button class="btn btn-info btn-sm">
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"> Info</span></button></a>

			<a href="{{ url("/profile/$profile->id/edit")}}"><button class="btn btn-success btn-sm">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"> Ubah</span></button></a>
		</th>
	</tr>
	@endforeach
</table>
</form>
@stop