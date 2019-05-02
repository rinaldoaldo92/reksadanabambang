@extends('adminweb.pagedefault')
@section('content')
<div class="side-content">
<h2>Selamat datang, <?php echo session()->get('nama')?> </h2>
</div>
@stop