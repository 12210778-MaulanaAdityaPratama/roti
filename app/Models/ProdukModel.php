<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProdukModel extends Model
{
    public $timestamps = false;
    protected $table = 'data_produk';

    protected $fillable = [
        'kode', 'produk','harga','stok','foto'
    ];
    
    use HasFactory;
}
