@extends('default')
@section('content')
<?php foreach ($informasi as $i) { ?>
<h4>{{$i->judul}}</h4>
<hr>
<p>{{$i->konten}}</p>
<?php } ?>
@stop