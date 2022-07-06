<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use App\Models\Transaksi;
use App\Models\Ulasan;
use App\Models\User;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Count
        $admin = User::where('role','Admin')->count();
        $member = User::where('role','Member')->count();
        $lapangan = Lapangan::count();
        $transaksi = Transaksi::count();
        // Ulasan
        $ulasan = Ulasan::latest()->paginate(5);

        return view('admin.home',compact('ulasan','admin','member','lapangan','transaksi'),["title" => "Home"]);

    }

}
