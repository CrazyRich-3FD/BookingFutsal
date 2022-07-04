<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    protected $table = 'lapangan';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'nama', 'jenis_lapangan', 'harga_normal', 'harga_weekend','deskripsi','gambar'
    // ];

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
