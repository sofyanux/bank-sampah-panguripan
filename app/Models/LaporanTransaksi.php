<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanTransaksi extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'transaksi_id', 'jumlah_transaksi', 'tgl_transaksi', 'keterangan'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }
}
