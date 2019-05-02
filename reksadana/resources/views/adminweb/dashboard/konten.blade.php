@extends('adminweb.pagedefault')
@section('content')
<div class="side-content">
<h2>Konten</h2>
<a href="/adminweb/dashboard/buat-konten"><button class="btn btn-primary">Buat Konten</button></a>
<br>
<div class="table-responsive">
<table class="table">
	<thead class="thead-info">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Judul</th>
			<th scope="col">Konten</th>
			<th scope="col">Slug</th>
			<th scope="col">Kategori</th>
			<th scope="col">Dibuat pada</th>
			<th scope="col">Diubah pada</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($konten as $k)
		<tr>
			<td>{{$k->id}}</td>
			<td>{{$k->judul}}</td>
			<td>{{$k->konten}}</td>
			<td>{{$k->slug}}</td>
			<td>{{$k->kategori}}</td>
			<td>{{$k->created_at}}</td>
			<td>{{$k->updated_at}}</td>
			<td> 
				<div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      				Pilihan
				    </button>
					<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					      <a class="dropdown-item" href="#">Open</a>
					      <a class="dropdown-item" href="/adminweb/dashboard/edit-konten/{{$k->id}}">Update</a>
					      <a class="dropdown-item" href="/adminweb/dashboard/delete-konten/{{$k->id}}">Delete</a>
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