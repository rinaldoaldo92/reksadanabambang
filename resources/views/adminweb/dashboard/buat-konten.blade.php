@extends('adminweb.pagedefault')
@section('content')
<div class="container-fluid">
<h2>Buat Konten</h2>
<hr>
<form method="POST">
@csrf
<div class="row form-group">
<label class="col-sm-1 col-sm-label">Judul</label>
<div class="col-sm-5">
<input type="text" name="judul">
</div>
</div>
<div class="row form-group">
<label class="col-sm-1 col-sm-label">Konten</label>
<div class="col-sm-5">
<textarea name="konten" id="textarea_dashboard" rows="15"></textarea>
</div>
</div>
<div class="row form-group">
<label class="col-sm-1 col-sm-label">Kategori</label>
<div class="col-sm-5">
<select name="kategori">
	<option>Ulasan Investasi</option>
	<option>Informasi</option>
	<option>FAQ</option>
	<option>Promo</option>
</select>
</div>
</div>
<button class="btn btn-primary">Kirim</button>
</form>
</div>
@stop