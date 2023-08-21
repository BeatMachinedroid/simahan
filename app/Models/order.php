<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'code_order',
        'jumlah',
        'alamat',
        'total',
        'status',
    ];

    public function pelanggan(){
        return $this->belongsTo(User::class, 'users_id');
    }
}
