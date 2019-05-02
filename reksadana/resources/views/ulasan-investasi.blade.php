@extends('default')
@section('content')
<?php foreach ($ulasan as $u) { ?>
<h4>{{$u->judul}}</h4>
<hr>
<p>{{$u->konten}}</p>
<?php } ?>
@stop