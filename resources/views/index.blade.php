@extends('layouts.master')

@section('content')
<div class="container mt-3">
	<div class="row">
		<p>Selamat datang di apoteker PT Profindo</p>
			<div class="col-md3">
			<a href="{{route('apoteker')}}" class="btn btn-primary">CRUD Apoteker</a></br></br>
			<a href="{{route('datang')}}" class="btn btn-primary">CRUD Obat yang baru datang</a></br></br>
			<a href="{{route('keluar')}}" class="btn btn-primary">CRUD Obat keluar</a></br></br>
			<a href="{{route('report')}}" class="btn btn-primary">Report Obat masuk dan keluar</a></br></br>
	   </div>
	</div>
</div>
 
@endsection