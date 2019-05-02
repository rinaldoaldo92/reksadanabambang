<!DOCTYPE html>
<html>
<head>
	<title>BambangFund Online | Yay for Invest!</title>
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
	<a class="navbar-brand"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarreksadana">
		<span class="navbar-toggle-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarreksadana">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline">Beranda</a></li>
			<li class="nav-item"><a class="nav-link" href="#cara">Cara Mendaftar</a></li>
			<li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline/promo">Promo</a></li>
		</ul>
		<div class="form-inline dropleft">
			<a class="btn btn-secondary" data-toggle="dropdown" role="button">Invest Now</a>
			<div class="dropdown-menu">
			<form action="" method="POST" class="form">
			@csrf
			<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" required>
			</div>
			<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" required>
			</div>
			<button class="btn btn-primary">Masuk</button>
			</form>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="/reksadanaonline/daftar">Daftar nasabah</a>
			<a class="dropdown-item" href="/reksadanaonline/daftaronline">Daftar layanan online</a>
			<a class="dropdown-item" href="/reksadanaonline/lupapassword">Lupa password</a> 
			<a class="dropdown-item" href="/reksadanaonline/lupausername">Lupa username</a>
			</div>
		</div>
</nav>
@yield('content')
<div class="footer bg-primary">
	<div class="row">
		<div class="col">
		<h5>Ikuti sosial media kami</h5>
		</div>
		<div class="col">
		<h5>Menu</h5>
		</div>
		<div class="col">
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
</body>
</html>