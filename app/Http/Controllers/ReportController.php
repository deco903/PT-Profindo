<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obatModel;
use App\Models\obatkeluarModel;

class ReportController extends Controller
{
    public function index()
    {
    	$dataobatmasuk = obatModel::all();
    	$dataobatkeluar = obatkeluarModel::all();
    	return view('report',compact('dataobatmasuk','dataobatkeluar'));
    }
}
