@extends('adminweb.pagedefault')
@section('content')
<div class="side-content">
<h2>Edit Konten</h2>
<form method="POST">
@csrf
<div class="form-group">
<label>Judul</label>
<input type="text" name="judul">
</div>
<div class="form-group">
<label>Konten</label>
<textarea name="konten" cols="70" rows="15"></textarea>
</div>
<div class="form-group">
<label>Kategori</label>
<select name="kategori">
	<option>Ulasan Investasi</option>
	<option>Informasi</option>
	<option>FAQ</option>
	<option>Promo</option>
</select>
</div>
<button class="btn btn-primary">Kirim</button>
</form>
</div>
@stop