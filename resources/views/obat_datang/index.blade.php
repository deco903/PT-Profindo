@extends('layouts.master')

@section('content')
<div class="container">
 <div class="col-md-3">
 	<!-- Button trigger modal -->
 	<a href="{{route('home')}}" class="btn btn-primary">
   <- Kembali
</a>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Input Obat Datang
</button>
@include('obat_datang.popup.modal')
 </div>
  <div class="row">
	<table class="table table-grid">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Kode Obat</th>
	      <th scope="col">Nama Obat</th>
	      <th scope="col">Harga Obat</th>
	      <th scope="col">Sisa Obat</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($datas as $data)
	    <tr>
	      <th>{{$loop->iteration}}</th>
	      <td>{{$data->kode_obat}}</td>
	      <td>{{$data->nama_obat}}</td>
	      <td>Rp {{number_format($data->harga_obat, 3)}}</td>
	      <td>{{$data->sisa_obat}}</td>
	      <td>{{date('d-M-y', strtotime($data->tgl_kadaluarsa))}}</td>
	       <td>
            <a href="/obat-datang/edit/{{$data->id}}" class="btn btn-sm btn-success">Edit</a> ||
            <a href="/obat-datang/delete/{{$data->id}}" class="btn btn-sm btn-danger">Delete</a>
          </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
  </div>	
</div>

@endsection