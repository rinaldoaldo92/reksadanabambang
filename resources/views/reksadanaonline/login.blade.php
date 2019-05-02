@extends('reksadanaonline.pagedefault')
@section('content')
<h4>Login</h4>
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
@stop