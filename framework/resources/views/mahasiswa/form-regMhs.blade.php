@extends('template.one-column')

@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-23"> 
<br>
<h2>Form Registrasi Mahasiswa</h2>
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
        <label for="nama" class="control-label col-xs-2">Nama</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="nama"  placeholder="nama">
        </div>
    </div>
    
    <div class="form-group">
        <label for="tgl_lahir" class="control-label col-xs-2">NIM</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="nim"  placeholder="NIM">
        </div>
    </div>

    <div class="form-group">
        <label for="nim" class="control-label col-xs-2">Tanggal Lahir</label>
        <div class="col-xs-3">
        <input type="date" class="form-control" name="tgl_lahir">
        </div>
    </div>

    <div class="form-group">
        <label for="prodi" class="control-label col-xs-2">Alamat</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
        </div>
    </div>

    <div class="form-group">
        <label for="prodi" class="control-label col-xs-2">Fakultas</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="fakultas" placeholder="Fakultas">
        </div>
    </div>

    <div class="form-group">
        <label for="prodi" class="control-label col-xs-2">Prodi</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="prodi" placeholder="Prodi">
        </div>
    </div>

    <div class="form-group">
        <label for="alamat" class="control-label col-xs-2">Email</label>
        <div class="col-xs-3">
        <input type="email" class="form-control" name="email" placeholder="Example@mail.com">
        </div>
    </div>
    
    <div class="form-group">
        <label for="alamat" class="control-label col-xs-2">Telp</label>
        <div class="col-xs-3">
        <input type="text" class="form-control" name="telp" placeholder="Telp">
        </div>
    </div>
    
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <hr>
	<div class="form-group">
        <label for="alamat" class="control-label col-xs-2"></label>
        <div class="col-xs-3">
         <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Daftar</span></button>
        </div>
    </div>
</form>
@stop