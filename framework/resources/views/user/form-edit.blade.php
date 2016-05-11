@extends('template.one-column')

@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-23"> 
<br>
<h2>Form Ubah Password</h2>
@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<hr>
<form action="{{ $url }}" method="post" class="form-horizontal">
     <div class="form-group">
        <label for="password" class="control-label col-xs-2">Username</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="username" value="{{ $user->username}}">
        </div>
    </div>
    
    <div class="form-group">
        <label for="password" class="control-label col-xs-2">Password</label>
        <div class="col-xs-3">
    <input type="password" class="form-control" name="password" value="{{ $user->password}}">
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="control-label col-xs-2">Password Confirmation</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
        </div>
    </div>


    <hr>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="password" class="control-label col-xs-2"></label>
        <div class="col-xs-3">
        <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-refresh" aria-hidden="true"> Ubah</span></button>
        <a href="/petugas"><button type="submit" class="btn btn-warning btn-sm" onclick="self.history.back()">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"> Batal</span></button></div>
    </div>
</form>
@stop
