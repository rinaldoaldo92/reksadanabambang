@extends('default')
@section('content')
<div id="content1">
<div class="align-middle text">
<h3 style="color: white">Selamat datang di Bambang Aset Manajemen.</h3>
</div>
</div>
<div id="content2">
<h2 style="text-align:center;color:white">Mengapa Kami?</h2>
<div class="row">
<div class="col-6 col-md-4">
<h6 style="color:white">Kami hadir dengan perspektif investasi baru.</h6>
<p style="color:white">Perspektif : valuasi, bottom-up, prospek, potensial dan sosial. </p>
</div>
<div class="col-6 col-md-4">
<h6 style="color:white">Tim kami memiliki pengalaman dari berbagai industri selama lebih dari 20 tahun.</h6>
<p style="color:white">Tim berpengalaman dengan perspektif industri yang beragam menambah aspirasi baru yang diangkat. </p>
</div>
<div class="col-6 col-md-4">
<h6 style="color:white">Kami mendukung investasi yang inklusif.</h6>
<p style="color:white">Dengan investasi dimulai dari Rp 10.000 untuk pasar uang dan Rp 50.000 untuk saham, campuran dan pendapatan tetap, semua orang bisa berinvestasi. </p>
</div> 
<div class="col-6 col-md-4">
<h6 style="color:white">Dana kelolaan dan nasabah kami yang terus bertumbuh.</h6>
<p style="color:white">Nasabah dan dana kelolaan kami terus bertumbuh, dari 5 nasabah dengan Rp 20 Miliar pada tahun 2017 menjadi 200 nasabah dengan Rp 1 Triliun. </p>
</div>
</div>
</div>
<div id="content3">
<h2 style="text-align:center">Produk Kami</h2>
<h5>Kami menyediakan beragam produk produk investasi dalam bentuk reksadana yang mudah dipahami, hanya membutuhkan modal yang sedikit dan hasil yang outperform dengan pendekatan risiko terukur.</h5>
<?php foreach ($produk as $p ) { ?>
<div class="card card-produk bg-dark text-white" data-toggle="modal" data-target="#{{$p->kode_produk}}">
  <div class="card-img-overlay">
    <h5 class="card-title">{{$p->nama_produk}}</h5>
  </div>
</div>
<div class="modal fade" id="{{$p->kode_produk}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{$p->nama_produk}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p><b>{{$p->jenis_produk}}</b></p>
        {{$p->keterangan}}
      </div>
      <div class="modal-footer">
        <a href="/files/prospektus/{{$p->prospektus}}" class="btn btn-primary">Prospektus</a>
        <a href="/files/fundfactsheet/{{$p->fundfactsheet}}" class="btn btn-primary">Fund Fact Sheet</a>
        <a href="/files/brosur/{{$p->brosur}}" class="btn btn-primary">Brosur</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<p>Kami juga menyediakan produk reksadana terproteksi, pengelolaan dana secara individu, DIRE, DINFRA dan berbagai jenis instrumen investasi lainnya. Untuk informasi dapat menghubungi marketing kami di marketing@bambang-aset.co.id.</p>
</div>
<div id="content4">
<h2 style="text-align:center">Informasi</h2>
<?php foreach ($informasi as $i ) { ?>
<div class="card dark bg-danger scale-card-content">
<img class="card-img" src="/files/{{$i->gambar}}">
<div class="card-body">
<h5 class="card-title">{{$i->judul}}</h5>
<p class="card-text">{{$i->konten}}</p>
<a href="/informasi/{{$i->slug}}"><button class="btn btn-primary">Selengkapnya</button></a>
</div>
</div>
<?php } ?>
</div>
<div id="content5">
<h2 style="text-align:center">Ulasan Investasi</h2>
<?php foreach ($ulasan as $u ) { ?>
<div class="card dark bg-danger scale-card-content">
<img class="card-img" src="/files/{{$i->gambar}}">
<div class="card-body">
<h5 class="card-title">{{$u->judul}}</h5>
<p class="card-text">{{$u->konten}}</p>
<a href="ulasan-investasi/{{$u->id}}"><button class="btn btn-primary">Selengkapnya</button></a>
</div>
</div>
<?php } ?>
</div>
<div id="content6">
<h2 style="text-align:center">Hubungi Kami</h2>
<p>Sahid Sudirman Center, Lantai 25 Unit F</p>
<p>Jl Jend Sudirman Kav 86, Jakarta 10220</p>
<p>Telp : +62 21 2787 6644</p>
<p>Fax : +62 21 2787 6645</p>
<p>E-mail : cs@bambang-aset.co.id</p>
</div>
@stop