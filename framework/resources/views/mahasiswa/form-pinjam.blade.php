@extends('template.one-column')

@section("content")

        @yield("content")

<div class="container">
    <div class="col-md-22"> 
<br>
<h2>Form Peminjaman Buku</h2>

<br>
<form action="{{ $url }}" method="post" class="form-horizontal">
	
	 <div class="form-group">
        <label for="nama" class="control-label col-xs-2">Nama</label>
        <div class="col-xs-3">
             <p class="form-control-static">{{ $mahasiswa->nama }}</p>
    
        </div>
    </div>

    <div class="form-group">
        <label for="nim" class="control-label col-xs-2">NIM</label>
        <div class="col-xs-3">
            <p class="form-control-static">{{ $mahasiswa->nim }}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="fakultas" class="control-label col-xs-2">Fakultas</label>
        <div class="col-xs-3">
    <p class="form-control-static">{{ $mahasiswa->fakultas }}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="prodi" class="control-label col-xs-2">Prodi</label>
        <div class="col-xs-3">
    <p class="form-control-static">{{ $mahasiswa->prodi }}</p>
        </div>
    </div>

    
    <div class="form-group">
        <label for="prodi" class="control-label col-xs-2">Waktu Peminjaman</label>
        <div class="col-xs-3">
        
    <p class="form-control-static">{{ $mahasiswa->wkt_pinjam }}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="prodi" class="control-label col-xs-2">Tanggal Pengembalian</label>
        <div class="col-xs-3">
         <input type="date" class="form-control" name="tgl_balik" value="{{ $mahasiswa->tgl_balik }}">
        </div>
    </div>

   <div class="form-group">
        <label for="buku" class="control-label col-xs-2">Pilih Buku</label>
        <div class="col-lg-20">
    @foreach ($list_buku as $buku)
    <input type="checkbox" name="buku[]"
    @if($mahasiswa->buku !=null)
    @if($mahasiswa->buku->contains($buku->id))
    checked
    @endif
    @endif

    value="{{ $buku->id }}">  {{ $buku->judul }}   
    @endforeach
        </div>
    </div>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<hr>
	<div class="form-group">
        <div class="col-xs-offset-2 col-xs-20">
            <button type="submit" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Simpan</span></button>
            <a href="/petugas"><button type="submit" class="btn btn-warning btn-sm" onclick="self.history.back()">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"> Batal</span></button></div>
        </div>
    </div>
</form>

@stop