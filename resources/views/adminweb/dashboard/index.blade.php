@extends('adminweb.pagedefault')
@section('content')
<div class="container-fluid">
<h2>Selamat datang, <?php echo session()->get('nama')?> </h2>
</div>
@stop