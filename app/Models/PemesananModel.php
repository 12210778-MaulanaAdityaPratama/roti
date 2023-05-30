<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananModel extends Model
{
    public $timestamps = false;
    protected $table = 'data_pemesanan';

    protected $fillable = [
        'no', 'kode','no_telp','jml_beli','detail','tgl_pesan','total'
    ];
    use HasFactory;
}
