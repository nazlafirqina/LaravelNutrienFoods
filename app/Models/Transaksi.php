<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['idUser', 'totalBarang', 'totalHarga', 'cart', 'bayar', 'kirim'];

    public function detail()
    {
        return $this->hasMany(DetailTransaksi::class, 'idTransaksi', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'id');
    }
}
