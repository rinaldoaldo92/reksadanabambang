@extends('adminweb.default')
@section('content')
<div class="adminweb">
<h3>Adminweb Bambang Aset</h3>
@include('adminweb.dashboard.flash')
<form class="form-login" method="POST">
	@csrf
	<div class="form-group">
	<label>Username</label>
	<input type="text" name="username" required>
	</div>
	<div class="form-group">
	<label>Password</label>
	<input type="password" name="password" required>
	</div>
	<button class="btn btn-secondary">Login</button>
</form>
</div>
@stop