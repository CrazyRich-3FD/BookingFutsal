<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'pelanggan_id', 'booking_id', 'metode_pembayaran', 'bukti_byr'
    // ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
