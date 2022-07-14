<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Lapangan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Days;

class BisnisController extends Controller
{

    public function index(Request $request)
    {
        $id_booking = [];
        if($request->id){
            $id_booking = Booking::where('id', $request->id)->get();
        }
        $day = Carbon::now()->format('d');
        // DB::table('users')->where(DB::raw(DAY('created_at)), $day);
        // $hari = DB::table('booking')->where(DB::raw(Day('created_at')), $day);
        $booking = Booking::all();
        return view('Bisnis.index',compact('booking','id_booking'),["title" => "Pemesanan"]);
    }

    public function create(Request $request)
    {
        // $lapangan = Lapangan::all();
        $lapangan = [];
        if($request->id){
            $lapangan = Lapangan::where('id', $request->id)->get();
        }
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
