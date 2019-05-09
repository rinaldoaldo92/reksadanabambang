@extends('adminweb.pagedefault')
@section('content')
<div class="container-fluid">
<h2>Profil</h2>
<hr>
<?php foreach($profil as $p) { ?>
<b>Nama</b> <p>{{$profil->nama}}</p>
<b>Jabatan</b> <p>{{$p->jabatan}}</p>
<b>Username</b> <p>{{$p->username}}</p>
<?php } ?>
</div>
@stop