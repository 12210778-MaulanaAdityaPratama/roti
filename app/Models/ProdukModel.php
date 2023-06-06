<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\UserProdukModel;

class ProdukModel extends Model
{
    public $timestamps = false;
    protected $table = 'data_produk';

    protected $fillable = [
        'kode', 'produk','harga','stok','foto'
    ];
    public function checkouts()
{
    return $this->hasMany(UserProdukModel::class);
}
public function user()
{
    return $this->belongsTo(User::class, 'users_id');
}
    
    use HasFactory;
}
