@extends('layouts.master')

@section('content')
<div class="container mt-3">
  <div class="row">
  	  <form action="{{route('update.obat')}}" method="POST">
        @csrf
        	<input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group">
                <label for="inputName">Kode Obat</label>
                <input type="text" name="kode_obat" class="form-control" id="inputName" value="{{$data->kode_obat}}"/ required>
            </div>
           <div class="form-group">
                <label for="inputName">Nama Obat</label>
                <input type="text" name="nama_obat" class="form-control" id="inputName"  value="{{$data->nama_obat}}"/ required>
            </div>
            <div class="form-group">
                <label for="inputName">Harga Obat</label>
                <input type="text" name="harga_obat" class="form-control" id="hargaobat"  value="{{$data->harga_obat}}" required>
            </div>
            <div class="form-group">
                <label for="inputName">sisa Obat</label>
                <input type="number" name="sisa_obat" class="form-control"  value="{{$data->sisa_obat}}" required>
            </div>
             <div class="form-group">
                <label for="inputName">Tanggal Kadaluarsa</label>
                <input type="date" name="tgl_kadaluarsa" class="form-control" id="date"  value="{{$data->tgl_kadaluarsa}}">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
  </div>	
</div>
@endsection