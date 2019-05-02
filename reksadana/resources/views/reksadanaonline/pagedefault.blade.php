<!DOCTYPE html>
<html>
<head>
	<title>{page} - BambangFund Online | Yay for Invest!</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/fontawesome-all.css')}}">
	<script type="text/javascript" src="{{URL::asset('js/jquery-3.3.1.slim.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-transparent">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">		
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline">Beranda</a></li>
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline#cara">Cara Mendaftar</a></li>
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline#promo">Promo</a></li>
		</ul>
		<div class="form-inline">
			<a class="btn btn-secondary" data-toggle="modal" href="#login" role="button">Masuk</a>
		</div>
</nav>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Masuk untuk memulai berinvestasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	@include('reksadanaonline.flash')
      	<form method="POST" class="form">
		@csrf
		<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" value="{{ old('username') }}" required>
		</div>
		<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" required>
		</div>
		<button class="btn btn-primary">Masuk</button>
		<hr>
		<a href="/reksadanaonline/lupapassword">Lupa password</a> | <a href="/reksadanaonline/daftaronline">Daftar online</a> | <a href="/reksadanaonline/daftar">Daftar sebagai nasabah</a>
		</form>  
    </div>
  </div>
</div>
</div>
<div class="content-halaman">
@yield('content')
</div>
<div class="container-fluid bg-primary">
<div class="footer">
	<div class="row">
		<div class="col">
		<h5>Ikuti sosial media kami</h5>
		</div>
		<div class="col">
		<h5>Perhatian</h5>
		<p>Produk reksadana tidak termasuk dalam penjaminan pemerintah, harap membaca prospektus untuk memahami resiko-resiko yang mungkin terjadi saat berinvestasi di reksadana. </p>
		</div>
		<div class="col">
		<h5>Hubungi Kami</h5>
		<b>PT Bambang Aset Manajemen</b>
		<p>Sahid Sudirman Center, Lantai 25 Unit F</p>
		<p>Jl Jend Sudirman Kav 86, Jakarta 10220</p>
		<p>Telp : +62 21 2787 6644</p>
		<p>Fax : +62 21 2787 6645</p>
		<p>E-mail : cs@bambang-aset.co.id</p>
		</div>
	</div>
	<p style="text-align:center">Copyright 2019. All rights reserved.</p>
</div>
</div>
</body>
</html>