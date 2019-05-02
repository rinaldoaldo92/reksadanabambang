<!DOCTYPE html>
<html>
<head>
	<title>Bambang Aset Manajemen</title>
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
			<li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
			<li class="nav-item"><a class="nav-link" href="/#content2">Mengapa Kami?</a></li>
			<li class="nav-item"><a class="nav-link" href="/#content3">Produk Kami</a></li>
			<li class="nav-item"><a class="nav-link" href="/#content4">Informasi</a></li>
			<li class="nav-item"><a class="nav-link" href="/#content5">Ulasan Investasi</a></li>
			<li class="nav-item"><a class="nav-link" href="/#content6">Hubungi Kami</a></li>
		</ul>
		<div class="form-inline">
			<a class="btn btn-secondary" href="/reksadanaonline" role="button">Invest Now</a>
		</div>
	</div>
</nav>
@yield('content')
<div class="footer bg-info">
	<h6 style="text-align:center">Copyright 2019. All rights reserved.</h6>
</div>
</body>
</html>