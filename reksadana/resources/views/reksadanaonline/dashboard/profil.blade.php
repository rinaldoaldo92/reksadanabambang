@extends('reksadanaonline.dashboard.default')
@section('content')
<div class="content-dashboard-1">
<h2>Profil Nasabah</h2>
<p>Untuk melakukan perubahan terhadap data yang dicantumkan disini, silahkan klik link ini untuk mengubah data. Konfirmasi data maksimal 3 hari kerja. </p>
</div>
<div class="row content-dashboard-2">
<div class="col-4">
<label>Customer ID</label>
<p><?php echo session()->get('custid')?></p>
<label>Nama</label>
<p><?php echo session()->get('nama')?></p>
<label>Username</label>
<p><?php echo session()->get('username')?></p>
<label>Tempat Tanggal Lahir</label>
<p><?php echo session()->get('custid')?></p>
<label>Nomor Identitas</label>
<p><?php echo session()->get('custid')?></p>
<label>Alamat Domisili</label>
<p><?php echo session()->get('custid')?></p>
<label>Provinsi</label>
<p><?php echo session()->get('custid')?></p>
<label>Negara</label>
<p><?php echo session()->get('custid')?></p>
<label>Alamat Surat Menyurat</label>
<p><?php echo session()->get('custid')?></p>
<label>Provinsi</label>
<p><?php echo session()->get('custid')?></p>
<label>Negara</label>
<p><?php echo session()->get('custid')?></p>
<label>Nomor Telepon</label>
<p><?php echo session()->get('custid')?></p>
<label>Nomor Handphone</label>
<p><?php echo session()->get('custid')?></p>
<label>Nama Ibu Kandung</label>
<p><?php echo session()->get('custid')?></p>
</div>
<div class="col-4">
<label>Pekerjaan</label>
<p><?php echo session()->get('custid')?></p>
<label>Instansi Tempat Bekerja</label>
<p><?php echo session()->get('custid')?></p>
<label>Alamat Tempat Bekerja</label>
<p><?php echo session()->get('custid')?></p>
<label>Nomor Telepon</label>
<p><?php echo session()->get('custid')?></p>
<label>Nomor Faksimili</label>
<p><?php echo session()->get('custid')?></p>
<label>Email</label>
<p><?php echo session()->get('custid')?></p>
<label>Pekerjaan Pasangan/Orang Tua</label>
<p><?php echo session()->get('custid')?></p>
<label>Instansi Tempat Bekerja</label>
<p><?php echo session()->get('custid')?></p>
<label>Alamat Tempat Bekerja</label>
<p><?php echo session()->get('custid')?></p>
<label>Nomor Telepon</label>
<p><?php echo session()->get('custid')?></p>
<label>Nomor Faksimili</label>
<p><?php echo session()->get('custid')?></p>
<label>Email</label>
<p><?php echo session()->get('custid')?></p>
<label>Pekerjaan Sampingan</label>
<p><?php echo session()->get('custid')?></p>
<label>Besaran Penghasilan Utama</label>
<p><?php echo session()->get('custid')?></p>
<label>Besaran Penghasilan Sampingan</label>
<p><?php echo session()->get('custid')?></p>
</div>
<div class="col-4">
<label>Skor Profil Resiko</label>
<label>Profil Resiko</label>
<label>Tujuan Investasi</label>
</div>
</div>
@stop