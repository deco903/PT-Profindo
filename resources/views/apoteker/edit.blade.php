@extends('layouts.master')

@section('content')
<div class="container mt-3">
  <div class="row">
  	  <form action="{{route('update.apoteker')}}" method="POST">
        @csrf
        	<input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group">
                <label for="inputName">Kode Apoteker</label>
                <input type="text" name="kode_apoteker" class="form-control" id="inputName" value="{{$data->kode_apoteker}}"/ required>
            </div>
           <div class="form-group">
                <label for="inputName">Nama Apoteker</label>
                <input type="text" name="nama_apoteker" class="form-control" id="inputName" value="{{$data->nama_apoteker}}"/ required>
            </div>
            <div class="form-group">
                <label for="inputName">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" id="date" value="{{$data->tgl_lahir}}" >
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
  </div>	
</div>
@endsection