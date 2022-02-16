@extends('layouts.master')

@section('content')
<div class="container mt-3">
  <div class="row">
  	  <form action="{{route('update.obatkeluar')}}" method="POST">
        @csrf
        	<input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group">
                <label for="inputName">Id Transaksi</label>
                <input type="text" name="id_transaksi" class="form-control" id="inputName" value="{{$data->id_transaksi}}"/ required>
            </div>
           <div class="form-group">
                <label for="inputName">kode Obat</label>
                <input type="text" name="kode_obat" class="form-control" id="inputName" value="{{$data->kode_obat}}"/ required>
            </div>
            <div class="form-group">
                <label for="inputName">Jumlah Jual</label>
                <input type="number" name="jumlah_jual" class="form-control" value="{{$data->jumlah_jual}}" required>
            </div>
            <div class="form-group">
                <label for="inputName">Kode Apoteker</label>
                <input type="text" name="kode_apoteker" class="form-control" value="{{$data->kode_apoteker}}" required>
            </div>
             <div class="form-group">
                <label for="inputName">Tanggal Beli</label>
                <input type="date" name="tgl_beli" class="form-control" id="date" value="{{$data->tgl_beli}}">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
  </div>	
</div>
@endsection