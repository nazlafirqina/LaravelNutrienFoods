<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['idUser', 'idMakanan', 'jumlahBarang'];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'id');
    }

    public function makanan()
    {
        return $this->belongsTo(Makanan::class, 'idMakanan', 'id');
    }
}
