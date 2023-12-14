<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'no_hp',
        'saldo',
        'alamat',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'user_id');
    }

    public function tabungan()
    {
        return $this->hasMany(Tabungan::class, 'user_id');
    }

    public function penukaran()
    {
        return $this->hasMany(Penukaran::class, 'user_id');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }

    public function notifikasi()
    {
        return $this->hasMany(Notifikasi::class, 'user_id');
    }

    public function laporanPenimbangan()
    {
        return $this->hasMany(LaporanPenimbangan::class, 'user_id');
    }

    public function laporanTransaksi()
    {
        return $this->hasMany(LaporanTransaksi::class, 'user_id');
    }

    public function pengeluaran()
    {
        return $this->hasMany(Pengeluaran::class, 'user_id');
    }

    public function pemasukan()
    {
        return $this->hasMany(Pemasukan::class, 'user_id');
    }
}
