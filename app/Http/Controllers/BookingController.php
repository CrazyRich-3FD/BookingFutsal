<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Lapangan;
use App\Models\Ulasan;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $booking = Booking::latest()->paginate(5);
        // Ulasan
        $ulasan = Ulasan::latest()->paginate(5);

        return view('Booking.index',compact('booking','ulasan'),["title" => "Booking"])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $lapangan = Lapangan::all();
        $ulasan = Ulasan::latest()->paginate(5);

        return view('Booking.create',compact('lapangan','ulasan'),["title" => "Create Booking"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'lapangan_id' => 'required',
            'tgl_booking' => 'required',
            'jam_booking' => 'required',
            'durasi' => 'required',
            'status'=> 'required'
            
        ]);     
     
        try {
            Booking::create($request->all());

            return redirect()->route('booking.index')
                ->with('success', 'Booking Created Successfully!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
        $ulasan = Ulasan::latest()->paginate(5);
        return view('Booking.show',compact('booking','ulasan'),["title" => "Show Booking"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
        $lapangan = Lapangan::all();
        $ulasan = Ulasan::latest()->paginate(5);

        return view('Booking.edit',compact('booking','lapangan','ulasan'),["title" => "Update Booking"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
        $request->validate([
            'lapangan_id' => 'required',
            'tgl_booking' => 'required',
            'jam_booking' => 'required',
            'durasi' => 'required',
            'status'=> 'required'
            
        ]);
     
        try {
            $booking->update($request->all());

            return redirect()->route('booking.index')
                ->with('success', 'Booking Update Successfully!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
        $booking->delete();
    
        return redirect()->back();
    }
}
