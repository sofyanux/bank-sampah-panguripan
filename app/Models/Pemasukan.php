<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'keterangan', 'jumlah', 'tgl_pemasukan'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
