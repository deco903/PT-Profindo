@extends('layouts.master')

@section('content')
<div class="container">
 <div class="col-md-3">
 	<!-- Button trigger modal -->
 	<a href="{{route('home')}}" class="btn btn-primary">
   <- Kembali
</a>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Input Apoteker
</button>
@include('apoteker.popup.modal')
 </div>
  <div class="row">
	<table class="table table-grid">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Kode Apoteker</th>
	      <th scope="col">Nama Apoteker</th>
	      <th scope="col">Tanggal Lahir</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($datas as $data)
	    <tr>
	      <th>{{$loop->iteration}}</th>
	      <td>{{$data->kode_apoteker}}</td>
	      <td>{{$data->nama_apoteker}}</td>
	      <td>{{date('d-M-y', strtotime($data->tgl_lahir))}}</td>
	       <td>
            <a href="/apoteker/edit/{{$data->id}}" class="btn btn-sm btn-success">Edit</a> ||
            <a href="/apoteker/delete/{{$data->id}}" class="btn btn-sm btn-danger">Delete</a>
          </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
  </div>	
</div>

@endsection