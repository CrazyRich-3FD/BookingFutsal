<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'id', 'nama', 'no_tlp', 'alamat', 'user_id'
    // ];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    // public function booking()
    // {
    //     return $this->belongsToMany(Booking::class,'pelanggan_idpelanggan', 'booking_idbooking');
    // }
}
