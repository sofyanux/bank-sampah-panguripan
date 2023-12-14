<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    use HasFactory;

    protected $fillable = ['jenis_sampah', 'harga', 'deskripsi', 'foto'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'sampah_id');
    }

    public function laporanPenimbangan()
    {
        return $this->hasMany(LaporanPenimbangan::class, 'sampah_id');
    }
}
