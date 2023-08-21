<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'barang_id',
        'jumlah',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function product()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }
}
