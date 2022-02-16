<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obatModel;

class obatdatangController extends Controller
{
    public function index()
    {
 		$datas = obatModel::all();   	
    	return view('obat_datang.index',compact('datas'));
    }

    public function store(Request $request)
    {
    	$request->validate([
            'kode_obat' => 'required',
            'nama_obat' => 'required',
            'harga_obat' => 'required',
            'sisa_obat' => 'required',
            'tgl_kadaluarsa' => 'required',
        ]);

        $kode_obat = $request->kode_obat;
        $nama_obat = $request->nama_obat;
        $harga_obat = $request->harga_obat;
        $sisa_obat = $request->sisa_obat;
     	$tgl_kadaluarsa = $request->tgl_kadaluarsa;
     

        $categori = new obatModel();
        $categori->kode_obat = $kode_obat;
        $categori->nama_obat = $nama_obat;
        $categori->harga_obat = $harga_obat;
        $categori->sisa_obat = $sisa_obat;
        $categori->tgl_kadaluarsa = $tgl_kadaluarsa;
        $categori->save();

        return redirect()->back();
    }

    public function edit($id)
    {
    	$data = obatModel::find($id);
    	return view('obat_datang.edit', compact('data'));
    }

    public function update(Request $request)
    {
    	$data = obatModel::find($request->id);

        $categori_data = [
            'kode_obat' => $request->kode_obat,
            'nama_obat' => $request->nama_obat,
            'harga_obat' => $request->harga_obat,
            'sisa_obat' => $request->sisa_obat,
            'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
          
        ];

        $data->update($categori_data);

        return redirect()->route('datang');
    }

    public function delete($id)
    {
    	$data = obatModel::find($id);
    	$data->delete();
        return redirect()->route('datang');
    }
}
