<?php

namespace App\Models;

use Carbon\Carbon;
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

    // public function getCreatedAtAttribute(){
    //     return Carbon::parse($this->attributes['tgl_booking'])
    //         ->translatedFormat('l');
    // }

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
