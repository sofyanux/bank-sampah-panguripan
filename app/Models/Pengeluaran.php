<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'keterangan', 'jumlah', 'tgl_pengeluaran'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
