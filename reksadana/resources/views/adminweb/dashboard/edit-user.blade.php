@extends('adminweb.pagedefault')
@section('content')
<div class="side-content">
<h2>Buat User Baru</h2>
<form method="POST">
@csrf
<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" value="<?php echo session()->get('nama');?>">
</div>
<div class="form-group">
<label>Username</label>
<input type="email" name="username" value="<?php echo session()->get('username');?>">
</div>
<div class="form-group">
<label>Jabatan</label>
<select name="kategori">
	<option selected="<?php echo session()->get('jabatan');?>"></option>
	<option>Operation</option>
	<option>Sales</option>
	<option>Marketing</option>
	<option>Investment</option>
</select>
<div class="form-group">
<label>Status</label>
<select name="kategori">
	<option selected="<?php echo session()->get('status');?>"></option>
	<option>YES</option>
	<option>NO</option>
</select>
</div>
</div>
<button class="btn btn-primary">Kirim</button>
</form>
</div>
@stop