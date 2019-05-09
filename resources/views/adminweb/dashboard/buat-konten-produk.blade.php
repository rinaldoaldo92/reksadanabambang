@extends('adminweb.pagedefault')
@section('content')
<div class="container-fluid">
<h2>Buat Produk</h2>
<hr>
<form method="POST">
@csrf
<div class="row">
<div class="col-6">
<div class="form-group">
<label>Nama Produk</label>
<input type="text" name="nama_produk">
</div>
<div class="form-group">
<label>Keterangan</label>
<textarea name="keterangan" cols="70" rows="5"></textarea>
</div>
<div class="form-group">
<label>Bank Kustodian</label>
<select name="bank_kustodian">
	<option>PT Bank CABE Naga Tbk.</option>
	<option>PT Bank Permisi Tbk.</option>
	<option>PT Bank Danonano Indonesia Tbk.</option>
</select>
</div>
<div class="form-group">
<label>Portofolio</label>
<textarea name="portofolio" cols="70" rows="5"></textarea>
</div>
</div>
<div class="col-6">
<div class="form-group">
<label>Jenis</label>
<select name="jenis_produk">
	<option>Reksadana Pasar Uang</option>
	<option>Reksadana Pendapatan Tetap</option>
	<option>Reksadana Campuran</option>
	<option>Reksadana Saham</option>
	<option>Reksadana Terproteksi</option>
	<option>DIRE/DINFRA</option>
</select>
</div>
<div class="form-group">
<label>Prospektus</label>
<input type="file" name="prospektus">
</div>
<div class="form-group">
<label>Fund Fact Sheet</label>
<input type="file" name="ffs">
</div>
<div class="form-group">
<label>Brosur</label>
<input type="file" name="brosur">
</div>
<button class="btn btn-primary">Kirim</button>
</div>
</div>
</form>
</div>
@stop