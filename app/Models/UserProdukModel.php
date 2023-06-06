<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProdukModel;
use App\Models\User;

class UserProdukModel extends Model
{
    protected $table = 'user_produk';

    protected $fillable = [
        'users_id', 'produk_id','jumlah',
    ];
    public function data_produk()
    {
        return $this->belongsTo(ProdukModel::class, 'produk_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    use HasFactory;
}
