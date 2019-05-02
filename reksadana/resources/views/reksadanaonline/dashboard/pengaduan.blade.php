@extends('reksadanaonline.dashboard.default')
@section('content')
<div class="content-dashboard-1">
<h2>Pengaduan</h2>
</div>
<div class="content-dashboard-2">
<form method="POST">
@csrf
<div class="form-group">
<label>Customer ID</label>
<input type="text" name="custid" value="<?php echo session()->get('custid') ?>" disabled>
</div>
<div class="form-group">
<label>Jenis Keluhan</label>
<select>
	<option>Transaksi</option>
	<option>Sistem BambangFund Online</option>
	<option>Pelayanan CS atau Operation</option>
</select>
</div>
<div class="form-group">
<label>Detail Keluhan</label>
<textarea name="keluhan"></textarea>
</div>
<div class="form-group">
<label>Lampiran</label>
<input type="file" name="lampiran">
</div>
<button type="button" class="btn btn-secondary">Kirim</button>
</form>
</div>
@stop