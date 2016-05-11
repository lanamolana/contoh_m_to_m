@extends('template.one-column')
@section("content")

<div class="container">
<div class="col-md-6">
<h2>List User</h2>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th>No</th>
		<th>Username</th>
		<th>Password</th>
		<th>Level</th>
		<th>Action</th>

	</thead>
	@foreach($user as $index=>$user)
	<tr>
		<th>{{ $index+1 }}</th>
		<th>{{ $user->username }}</th>
		<th>{{ $user->password }}</th>
		<th>{{ $user->level }}</th>
		<th>
		<a href="{{ url("/user/$user->id/edit")}}"><button class="btn btn-success btn-sm">
		<span class="glyphicon glyphicon-cog" aria-hidden="true"> Ubah</span></button></a>
			
	</tr>
	@endforeach
</table>
</div>
</div>
@stop