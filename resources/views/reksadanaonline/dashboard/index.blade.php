@extends('reksadanaonline.dashboard.default')
@section('content')
<div class="content-dashboard-1">
<h2>Selamat datang <?php echo session()->get('nama')?></h2>
</div>
<div class="row content-dashboard-2">
<div class="col-6">
<h3>Portofolio</h3>
</div>
<div class="col-6">
<h3>Profil Resiko dan Alokasi Ideal</h3>
</div>
</div>
@stop