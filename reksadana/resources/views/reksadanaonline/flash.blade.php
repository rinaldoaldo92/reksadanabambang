@if ($message = Session::get('error'))
<div class="alert alert-warning alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-danger alert-block">
	<strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-danger alert-block">
	<strong>{{ $message }}</strong>
</div>
@endif