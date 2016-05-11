@extends('template.one-column')

@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-12"> 
<br>
<h2>Form Edit Buku</h2>
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
    <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}">
        </div>
    </div>
	
    <div class="form-group">
        <label for="pengarang" class="control-label col-xs-1">Nama Pengarang</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="pengarang" value="{{ $buku->pengarang }}">
        </div>
    </div>

    <div class="form-group">
        <label for="penerbit" class="control-label col-xs-1">Penerbit</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}">
        </div>
    </div>

    <div class="form-group">
        <label for="penerbit" class="control-label col-xs-1">Tahun Terbit</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="thn_terbit" value="{{ $buku->thn_terbit }}">
        </div>
    </div>

    <div class="form-group">
        <label for="kategori" class="control-label col-xs-1">Kategori</label>
        <div class="col-xs-3">
    <select class="form-control" name="kategori">
        <option value="Sains" {{ ($buku->kategori=='Sains')?'selected':'' }} >Sains</option>
        <option value="Religi" {{ ($buku->kategori=='Religi')?'selected':'' }} >Religi</option>
        <option value="Kesehatan" {{ ($buku->kategori=='Kesehatan')?'selected':'' }} >Kesehatan</option>
        <option value="Sastra" {{ ($buku->kategori=='Sastra')?'selected':'' }}>Sastra</option>
        <option value="Edukasi" {{ ($buku->kategori=='Edukasi')?'selected':'' }}>Edukasi</option>
        <option value="Psikologi" {{ ($buku->kategori=='Psikologi')?'selected':'' }}>Psikologi</option>
        <option value="Komputer" {{ ($buku->kategori=='Komputer')?'selected':'' }}>Komputer</option>
    </select>
        </div>
    </div>

    <div class="form-group">
        <label for="tebal" class="control-label col-xs-1">Tebal</label>
        <div class="col-xs-3">
    <input type="text" class="form-control" name="tebal" value="{{ $buku->tebal }}">
        </div>
    </div>


    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<hr>
	<div class="form-group">
        <div class="col-xs-offset-1 col-xs-10">
            <button type="submit" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"> Ubah</span></button>
        </div>
    </div>
</form>
@endsection