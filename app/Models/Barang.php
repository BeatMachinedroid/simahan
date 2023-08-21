<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_barang',
        'category',
        'gambar',
        'harga',
        'stock',
    ];

    public function cate()
    {
        return $this->belongsTo(Category::class,'category');
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }
}
