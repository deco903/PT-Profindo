<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\apotekerModel;

class ApotekerController extends Controller
{
    public function index()
    {
    	$datas = apotekerModel::all();
    	return view('apoteker.index', compact('datas'));
    }

    public function store(Request $request)
    {
    	$request->validate([
            'kode_apoteker' => 'required',
            'nama_apoteker' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $kode_apoteker = $request->kode_apoteker;
        $nama_apoteker = $request->nama_apoteker;
        $tgl_lahir = $request->tgl_lahir;
     
        $categori = new apotekerModel();
        $categori->kode_apoteker = $kode_apoteker;
        $categori->nama_apoteker = $nama_apoteker;
        $categori->tgl_lahir = $tgl_lahir;
        $categori->save();

        return redirect()->back();
    }

    public function edit($id)
    {
    	$data = apotekerModel::find($id);
    	return view('apoteker.edit', compact('data'));
    }

    public function update(Request $request)
    {

        $data = apotekerModel::find($request->id);

        $categori_data = [
            'kode_apoteker' => $request->kode_apoteker,
            'nama_apoteker' => $request->nama_apoteker,
            'tgl_lahir' => $request->tgl_lahir,
          
        ];

        $data->update($categori_data);

        return redirect()->route('apoteker');
    }

    public function delete($id)
    {
    	$data = apotekerModel::find($id);
    	$data->delete();
        return redirect()->route('apoteker');
    }
}