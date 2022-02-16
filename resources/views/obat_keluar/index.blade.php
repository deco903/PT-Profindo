@extends('layouts.master')

@section('content')
<div class="container">
 <div class="col-md-3">
 	<!-- Button trigger modal -->
 	<a href="{{route('home')}}" class="btn btn-primary">
   <- Kembali
</a>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Input Obat Keluar
</button>
@include('obat_keluar.popup.modal')
 </div>
  <div class="row">
	<table class="table table-grid">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">id Transaksi</th>
	      <th scope="col">Kode Obat</th>
	      <th scope="col">Jumlah JUal</th>
	      <th scope="col">Kode Apoteker</th>
	      <th scope="col">Tanggal Beli</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($datas as $data)
	    <tr>
	      <th>{{$loop->iteration}}</th>
	      <td>{{$data->id_transaksi}}</td>
	      <td>{{$data->kode_obat}}</td>
	      <td>{{$data->jumlah_jual}}</td>
	      <td>{{$data->kode_apoteker}}</td>
	      <td>{{date('d-M-y', strtotime($data->tgl_beli))}}</td>
	       <td>
            <a href="/obat-keluar/edit/{{$data->id}}" class="btn btn-sm btn-success">Edit</a> ||
            <a href="/obat-keluar/delete/{{$data->id}}" class="btn btn-sm btn-danger">Delete</a>
          </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
  </div>	
</div>

@endsection