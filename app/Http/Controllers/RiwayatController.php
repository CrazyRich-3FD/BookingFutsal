<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::latest()->paginate();

        return view('Bisnis.riwayat',compact('transaksi'),["title" => "Riwayat"])
            ->with('i');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function tampil(Request $request)
    {
        $riwayat = [];
        if($request->id){
            $riwayat = Transaksi::where('id', $request->id)->get();
        }

        return view('Bisnis.show',compact('riwayat'),["title" => "Struk Pembayaran"]);
    }

    public function invoice(Request $request)
    {
        $riwayat = [];
        if($request->id){
            $riwayat = Transaksi::where('id', $request->id)->get();
        }

        // return view('Bisnis.invoice',compact('riwayat'));

        $pdf = FacadePdf::loadView('Bisnis.invoice', ['riwayat' => $riwayat])->setPaper('a4');
        return $pdf->download(date('d/m/y').'detail-transaksi.pdf');

    }
}
