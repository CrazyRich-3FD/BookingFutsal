<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Lapangan;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BisnisController extends Controller
{

    public function index()
    {
        $booking = Booking::all();
        return view('Bisnis.index',compact('booking'),["title" => "Pemesanan"]);
    }

    public function create()
    {
        $lapangan = Lapangan::all();
        return view('Bisnis.booking',compact('lapangan'),["title" => "Booking"]);
    }

    public function store(Request $request, Booking $booking)
    {
        $request->validate([
            'lapangan_id' => 'required',
            'tgl_booking' => 'required',
            'jam_booking' => 'required',
            'durasi' => 'required'
            
        ]);    

        try {
            $id = Booking::create($request->all())->id;

            return redirect()->route('pemesanan.index',compact('id'))
                ->with('success', 'Booking Created Successfully!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
    }

    public function show(Booking $booking)
    {
        return view('Bisnis.show',compact('booking'),["title" => "Show Booking"]);
    }

    public function edit(Request $request)
    {
        
    }

    public function update(Request $request, $id)
    {
        //
    }
}
