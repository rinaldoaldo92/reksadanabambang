@extends('adminweb.pagedefault')
@section('content')
<div class="side-content">
<h2>Profil</h2>
<label>Nama</label> <?php echo session()->get('nama')?>
<label>Jabatan</label> <?php echo session()->get('jabatan')?>
<label>Username</label> <?php echo session()->get('username')?>
</div>
@stop