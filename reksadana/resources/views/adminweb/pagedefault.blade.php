<!DOCTYPE html>
<html>
<head>
	<title>Admin web - Bambang Aset Manajemen</title>
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
<nav class="side-nav">
	<ul class="nav flex-column">
	  <li class="nav-item">
	    <a class="nav-link" href="/adminweb/dashboard">Beranda</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="/adminweb/dashboard/konten">Konten</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="/adminweb/dashboard/produk">Produk</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="/adminweb/dashboard/manajemen-user">Manajemen User</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="/adminweb/dashboard/profil">Profil</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="logout">Logout</a>
	  </li>
	</ul>
</nav>
@yield('content')
</body>
</html>