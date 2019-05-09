@extends('adminweb.pagedefault')
@section('content')
<div class="container-fluid">
<h2>Buat User Baru</h2>
<hr>
<form method="POST">
@csrf
<div class="form-group">
<label>Nama</label>
<input type="text" name="nama">
</div>
<div class="form-group">
<label>Username</label>
<input type="email" name="username">
</div>
<div class="form-group">
<label>Jabatan</label>
<select name="kategori">
	<option>Operation</option>
	<option>Sales</option>
	<option>Marketing</option>
	<option>Investment</option>
</select>
</div>
<button class="btn btn-primary">Kirim</button>
</form>
</div>
@stop