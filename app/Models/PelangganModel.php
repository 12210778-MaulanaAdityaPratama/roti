<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelangganModel extends Model
{
    public $timestamps = false;
    protected $table = 'data_pelanggan';

    protected $fillable = [
        'no', 'kode','nama','no_telp','email','alamat','username','password'
    ];
    use HasFactory;
}
