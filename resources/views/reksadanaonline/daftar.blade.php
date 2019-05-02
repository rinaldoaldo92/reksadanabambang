@extends('reksadanaonline.pagedefault')
@section('content')
<h4>Daftar</h4>
@include('reksadanaonline.flash')
<form method="POST" class="form">
@csrf
<div class="form-group">
<label>Nama sesuai kartu identitas</label>
<input type="text" name="nama" required>
</div>
<div class="form-group">
<label>E-mail</label>
<input type="email" name="email" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" required>
</div>
<div class="form-group">
<label>Ulangi Password</label>
<input type="password" name="re_password" required>
</div>
<input type="checkbox" name="accept" required>
<label>Dengan mengisi form berikut, anda telah menyetujui <a href="">syarat dan ketentuan</a> layanan kami.</label>
<button class="btn btn-primary">Daftar</button>
<hr>
<a href="/reksadanaonline/daftaronline">Daftar online</a> | <a href="/reksadanaonline/login">Login</a>
</form>
@stop