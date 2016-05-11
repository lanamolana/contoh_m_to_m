@extends('template.one-column')

@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-12"> 
<br>
<h2>Form Tambah Buku</h2>
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
<br>
<form action="{{ $url }}" method="post" class="form-horizontal">
	
	 <div class="form-group">
        <label for="judul" class="control-label col-xs-1">Judul Buku</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="judul" placeholder="Judul Buku">
        </div>
    </div>
	
    <div class="form-group">
        <label for="pengarang" class="control-label col-xs-1">Nama Pengarang</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="pengarang" placeholder="Nama Pengarang">
        </div>
    </div>

    <div class="form-group">
        <label for="penerbit" class="control-label col-xs-1">Penerbit</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="penerbit" placeholder="Penerbit">
        </div>
    </div>

    <div class="form-group">
        <label for="penerbit" class="control-label col-xs-1">Tahun Terbit</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="thn_terbit" placeholder="Penerbit">
        </div>
    </div>

    <div class="form-group">
        <label for="kategori" class="control-label col-xs-1">Kategori</label>
        <div class="col-xs-3">
    <select class="form-control" name="kategori">
        <option value="Sains">Sains</option>
        <option value="Religi">Religi</option>
        <option value="Kesehatan">Kesehatan</option>
        <option value="Sastra">Sastra</option>
        <option value="Edukasi">Edukasi</option>
        <option value="Psikologi">Psikologi</option>
        <option value="Komputer">Komputer</option>
    </select>
        </div>
    </div>

    <div class="form-group">
        <label for="tebal" class="control-label col-xs-1">Tebal</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="tebal" placeholder="Tebal">
        </div>
    </div>


    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<hr>
	<div class="form-group">
        <div class="col-xs-offset-1 col-xs-10">
            <button type="submit" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Simpan</span></button>
            <a href="/petugas"><button type="submit" class="btn btn-warning btn-sm" onclick="self.history.back()">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"> Batal</span></button></div>
        </div>
    </div>
</form>
@endsection