<!DOCTYPE html>
<html>
<head>
	<title>Dashboard BambangFund Online</title>
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
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
	<a class="navbar-brand" href="/reksadanaonline/dashboard">Bambang Fund Online</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarreksadana">
		<span class="navbar-toggle-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarreksadana">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline/dashboard/profil">Profil Nasabah</a></li>
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline/dashboard/produk">Produk</a></li>
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline/dashboard/promo">Promo</a></li>
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline/dashboard/transaksi">Transaksi</a></li>
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline/dashboard/bams-point">Bams Point</a></li>
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline/dashboard/pengaduan">Pengaduan</a></li>
			<li class="nav-item"><a class="nav-link" href="/reksadanaonline/dashboard/panduan">Panduan</a></li>
		</ul>
		<div class="form-inline">
			<a class="btn btn-secondary" href="logout" role="button">Logout</a>
		</div>
</nav>
@yield('content')
<div class="footer bg-primary">
	<p style="text-align:center">Copyright 2019. All rights reserved.</p>
</div>
</body>
</html>