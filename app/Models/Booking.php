<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'lapangan_id', 'tgl_booking', 'jam_booking', 'durasi','status'
    // ];

    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    // public function pelanggan()
    // {
    //     return $this->belongsToMany(Pelanggan::class,'pelanggan_idpelanggan', 'booking_idbooking');
    // }
}
