@extends('adminweb.pagedefault')
@section('content')
<div class="container-fluid">
<h2>Produk</h2>
<a href="/adminweb/dashboard/buat-konten-produk"><button class="btn btn-primary">Buat Produk</button></a>
<br>
<br>
<div class="table-responsive">
<table class="table">
	<thead class="thead-info">
		<tr>
			<th scope="col">Nama Produk</th>
			<th scope="col">Jenis Produk</th>
			<th scope="col">Prospektus</th>
			<th scope="col">Fund Fact Sheet</th>
			<th scope="col">Brosur</th>
			<th scope="col">Dibuat pada</th>
			<th scope="col">Diubah pada</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($produk as $p)
		<tr>
			<td>{{$p->nama_produk}}</td>
			<td>{{$p->jenis_produk}}</td>
			<td>{{$p->prospektus}}</td>
			<td>{{$p->fundfactsheet}}</td>
			<td>{{$p->brosur}}</td>
			<td>{{$p->created_at}}</td>
			<td>{{$p->updated_at}}</td>
			<td> 
				<div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      				Pilihan
				    </button>
					<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					      <a class="dropdown-item" href="#">Open</a>
					      <a class="dropdown-item" href="/adminweb/dashboard/edit-konten-produk/{{$p->id}}">Update</a>
					      <a class="dropdown-item" href="/adminweb/dashboard/delete-konten-produk/{{$p->id}}">Delete</a>
					</div>
			  	</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
@stop