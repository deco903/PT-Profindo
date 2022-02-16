<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatkeluarModel extends Model
{
    use HasFactory;
    protected $table = 'obat_keluar';
    protected $fillable = ['id_transaksi','kode_obat','jumlah_jual','kode_apoteker','tgl_beli'];
}
