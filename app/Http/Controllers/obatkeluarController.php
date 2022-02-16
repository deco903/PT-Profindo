<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obatkeluarModel;

class obatkeluarController extends Controller
{
    public function index()
    {
    	$datas = obatkeluarModel::all();
    	return view('obat_keluar.index', compact('datas'));
    }

    public function store(Request $request)
    {
    	$request->validate([
            'id_transaksi' => 'required',
            'kode_obat' => 'required',
            'jumlah_jual' => 'required',
            'kode_apoteker' => 'required',
            'tgl_beli' => 'required',
        ]);

        $id_transaksi = $request->id_transaksi;
        $kode_obat = $request->kode_obat;
        $jumlah_jual = $request->jumlah_jual;
        $kode_apoteker = $request->kode_apoteker;
     	$tgl_beli = $request->tgl_beli;
     

        $categori = new obatkeluarModel();
        $categori->id_transaksi = $id_transaksi;
        $categori->kode_obat = $kode_obat;
        $categori->jumlah_jual = $jumlah_jual;
        $categori->kode_apoteker = $kode_apoteker;
        $categori->tgl_beli = $tgl_beli;
        $categori->save();

        return redirect()->back();
    }

    public function edit($id)
    {
    	$data = obatkeluarModel::find($id);
    	return view('obat_keluar.edit',compact('data'));
    }

    public function update(Request $request)
    {
    	$data = obatkeluarModel::find($request->id);

        $categori_data = [
            'id_transaksi' => $request->id_transaksi,
            'kode_obat' => $request->kode_obat,
            'jumlah_jual' => $request->jumlah_jual,
            'kode_apoteker' => $request->kode_apoteker,
            'tgl_beli' => $request->tgl_beli,
          
        ];

        $data->update($categori_data);

        return redirect()->route('keluar');
    }

    public function delete($id)
    {
    	$data = obatkeluarModel::find($id);
    	$data->delete();
        return redirect()->route('keluar');
    }
}
