@extends('adminweb.pagedefault')
@section('content')
<div class="side-content">
<h2>List User</h2>
<a href="/adminweb/dashboard/buat-konten"><button class="btn btn-primary">Buat Konten</button></a>
<table>
	<thead>
		<tr>
			<td>#</td>
			<td>Nama</td>
			<td>Jabatan</td>
			<td>Username</td>
			<td>Dibuat pada</td>
			<td>Diubah pada</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($user as $u)
		<tr>
			<td>{{$u->id}}</td>
			<td>{{$u->nama}}</td>
			<td>{{$u->jabatan}}</td>
			<td>{{$u->username}}</td>
			<td>{{$u->created_at}}</td>
			<td>{{$u->update_at}}</td>
			<td>{{$u->status}}</td>
			<td> 
				<div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      				Pilihan
				    </button>
					<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					      <a class="dropdown-item" href="#">Open</a>
					      <a class="dropdown-item" href="/adminweb/dashboard/edit-user/{{$u->id}}">Update</a>
					      <a class="dropdown-item" href="/adminweb/dashboard/deactivate-user/{{$u->id}}">Deactivate</a>
					      <a class="dropdown-item" href="/adminweb/dashboard/delete-user/{{$u->id}}">Delete</a>
					</div>
			  	</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@stop