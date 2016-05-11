@extends('template.one-column')
@section("content")
<br>
<div class="container">
<div class="col-md-6">
<h2>Contact Us</h2>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Telp</th>
	</thead>
	@foreach($profile as $index=>$profile)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $profile->nama }}</th>
		<th>{{ $profile->email }}</th>
		<th>{{ $profile->telp }}</th>
	</tr>
	@endforeach
</table>
</form>
</div>
</div>
@endsection