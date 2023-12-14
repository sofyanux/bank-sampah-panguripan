<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'sampah_id', 'berat', 'total_harga', 'tgl_transaksi', 'keterangan'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sampah()
    {
        return $this->belongsTo(Sampah::class, 'sampah_id');
    }

    public function laporanTransaksi()
    {
        return $this->hasOne(LaporanTransaksi::class, 'transaksi_id');
    }
}
