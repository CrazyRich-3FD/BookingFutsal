<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $single_user = [];
        if(decrypt($request->id)){
            $single_user = User::where('id', decrypt($request->id))->get();
        }

        $id_booking = [];
        if(decrypt($request->idbooking)){
            $id_booking = Booking::where('id', decrypt($request->idbooking))->get();
        }

        $user = User::all();
        $booking = Booking::all();
        return view('Bisnis.transaksi',compact('booking','single_user','id_booking'),["title" => "Transaksi"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'booking_id' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_byr' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'     
            ]);

                      
            $input = $request->all();
                      
            if ($request->file('bukti_byr')) {
                $input['bukti_byr'] = $request->file('bukti_byr')->store('transaksi');
            }
                        
            try {
                Transaksi::create($input);
    
                return redirect()->route('index')
                    ->with('success', 'Konfirmasi Pembayaran Berhasil, Silakan Cek Di Riwayat Transaksi');
            } catch (\Exception $e){
                return redirect()->back()
                    ->with('error', 'Error during the creation!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        // return view('Bisnis.show',compact('transaksi'),["title" => "Struk Pembayaran"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
