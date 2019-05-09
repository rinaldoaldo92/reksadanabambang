@extends('adminweb.pagedefault')
@section('content')
<div class="container-fluid min-vh-100">
<h2>Manajemen User</h2>
<a href="/adminweb/dashboard/buat-user"><button class="btn btn-primary">Tambah User</button></a>
<br>
<br>
<div class="table-responsive">
<table class="table">
	<thead class="thead-info">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama</th>
			<th scope="col">Jabatan</th>
			<th scope="col">Username</th>
			<th scope="col">Status</th>
			<th scope="col">Dibuat pada</th>
			<th scope="col">Diubah pada</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($manajemen_user as $m)
		<tr>
			<td>{{$m->id}}</td>
			<td>{{$m->nama}}</td>
			<td>{{$m->jabatan}}</td>
			<td>{{$m->username}}</td>
			<td>{{$m->status}}</td>
			<td>{{$m->created_at}}</td>
			<td>{{$m->updated_at}}</td>
			<td> 
				<div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      				Pilihan
				    </button>
					<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					      <a class="dropdown-item" href="#">Open</a>
					      <a class="dropdown-item" href="/adminweb/dashboard/edit-user/{{$m->id}}">Update</a>
					      <a class="dropdown-item" href="/adminweb/dashboard/delete-user/{{$m->id}}">Delete</a>
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