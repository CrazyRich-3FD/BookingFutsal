<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use App\Models\Booking;
use Dompdf\Adapter\PDFLib;
use Illuminate\Support\Facades\Storage;
use PDF;
use App\Exports\TransaksiExport;
use App\Models\Ulasan;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaksi = Transaksi::latest()->paginate(10);
        // Ulasan
        $ulasans = Ulasan::latest()->paginate(5);
    
        return view('Transaksi.index',compact('transaksi','ulasans'),["title" => "Transaksi"])
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::all();
        $booking = Booking::all();
        $ulasans = Ulasan::latest()->paginate(5);

        return view('Transaksi.create',compact('user','booking','ulasans'),["title" => "Create Transaksi"]);
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
    
                return redirect()->route('transaksi.index')
                    ->with('success', 'Transaksi Created Successfully!');
            } catch (\Exception $e){
                return redirect()->back()
                    ->with('error', 'Error during the creation!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        $ulasans = Ulasan::latest()->paginate(5);
        return view('Transaksi.show',compact('transaksi','ulasans'),["title" => "Show Transaksi"]);
    }

    public function showTransaksi($id)
    {
        return view('Bisnis.show', [
            'transaksi' => Transaksi::findOrFail($id)
        ],["title" => "Show Transaksi"]);
        // return view('Bisnis.show',compact('transaksi'),["title" => "Show Transaksi"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
        $user = User::all();
        $booking = Booking::all();
        $ulasans = Ulasan::latest()->paginate(5);

        return view('Transaksi.edit',compact('transaksi','user','booking','ulasans'),["title" => "Update Transaksi"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'booking_id' => 'required',
            'metode_pembayaran' => 'required',    
            ]);
                      
            $input = $request->all();
                      
            if ($request->file('bukti_byr')) {
                if($request->oldImage){
                    Storage::delete($request->oldImage);
                }
                $input['bukti_byr'] = $request->file('bukti_byr')->store('transaksi');
            }
                                       
            try {
                $transaksi->update($input);
    
                return redirect()->route('transaksi.index')
                    ->with('success', 'Transaksi Update Successfully!');
            } catch (\Exception $e){
                return redirect()->back()
                    ->with('error', 'Error during the creation!');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $transaksi = Transaksi::find($id); 

        if($transaksi->bukti_byr){
            Storage::delete($transaksi->bukti_byr);
        }
        $transaksi->delete();

        return redirect()->back();
    }

    public function transaksiPDF()
    {
        $data = Transaksi::all();

        $pdf = PDF::loadView('transaksi/transaksiPDF', ['data' => $data])->setPaper('a4', 'landscape');
        return $pdf->download(date('d/m/y').'data-transaksi.pdf');

    }
    public function transaksiExcel() 
    {
        return Excel::download(new TransaksiExport,'Data_Transaksi.xlsx');
    }
}
