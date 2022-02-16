<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apotekerModel extends Model
{
    use HasFactory;
    protected $table = 'apoteker';
    protected $fillable = ['kode_apoteker','nama_apoteker','tgl_lahir'];
}
