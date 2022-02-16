<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatModel extends Model
{
    use HasFactory;
    protected $table = 'obat';
    protected $fillable = ['kode_obat','nama_obat','harga_obat','sisa_obat','tgl_kadaluarsa'];
}
