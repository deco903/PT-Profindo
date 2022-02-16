@extends('layouts.master')

@section('content')
<div class="container">
	<div class="col-md-3">
		<a href="{{route('home')}}" class="btn btn-primary">
   <- Kembali
</a>
	</div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <table class="table table-grid">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Kode Obat</th>
	      <th scope="col">Nama Obat</th>
	      <th scope="col">Harga Obat</th>
	      <th scope="col">Sisa Obat</th>
	      <th scope="col">Tanggal Kadaluarsa</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($dataobatmasuk as $masuk)
	    <tr>
	      <th>{{$loop->iteration}}</th>
	      <td>{{$masuk->kode_obat}}</td>
	      <td>{{$masuk->nama_obat}}</td>
	      <td>Rp {{number_format($masuk->harga_obat, 3)}}</td>
	      <td>{{$masuk->sisa_obat}}</td>
	      <td>{{date('d-M-y', strtotime($masuk->tgl_kadaluarsa))}}</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
    </div>
    <div class="col">
      <table class="table table-grid">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Id transaksi</th>
	      <th scope="col">Kode Obat</th>
	      <th scope="col">Jumlah penjualan</th>
	      <th scope="col">Kode Apoteker</th>
	      <th scope="col">Tanggal Beli</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($dataobatkeluar as $keluar)
	    <tr>
	      <th>{{$loop->iteration}}</th>
	      <td>{{$keluar->id_transaksi}}</td>
	      <td>{{$keluar->kode_obat}}</td>
	      <td>{{$keluar->jumlah_jual}}</td>
	      <td>{{$keluar->kode_apoteker}}</td>
	      <td>{{date('d-M-y', strtotime($keluar->tgl_beli))}}</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
    </div>
   
  </div>
</div>



@endsection