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
	<script type="text/javascript" src="{{URL::asset('js/ckeditor/ckeditor.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarreksadana">
		<span class="navbar-toggle-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarreksadana">
	<ul class="navbar-nav mr-auto">
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
<div class="footer bg-secondary">
	<h6 style="text-align:center">&copy; <?php echo date("Y");?>, All rights reserved.</h6>
</div>
	<script type="text/javascript">
		CKEDITOR.replace('textarea_dashboard');
	</script>
</body>
</html>