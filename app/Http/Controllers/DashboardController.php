<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use App\Models\Transaksi;
use App\Models\Ulasan;
use App\Models\User;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $ulasans = Ulasan::latest()->paginate(5);

        return view('admin.home',compact('ulasans','admin','member','lapangan','transaksi'),["title" => "Home"]);

    }

    public function show()
    {
        $ulasans = Ulasan::latest()->paginate(5);
        return view('admin.profile',compact('ulasans'),["title" => "Profile"]);
    }

    public function edit()
    {
        $ulasans = Ulasan::latest()->paginate(5);
        return view('admin.edit-profile',compact('ulasans'),["title" => "Edit Profile"]);
    }

    public function update(Request $request, User $user)
    {
        if($user = Auth::user()){
            $rules = [
                'nama' => 'required|max:255',
                'alamat' => 'required',
                'role' => 'required'
            ];

            if($request->email != $user->email){
                $rules['email'] = 'required|email:dns|unique:user';
            }

            if($request->username != $user->username){
                $rules['username'] = 'required|min:3|max:255|unique:user';
            }

            if($request->no_hp != $user->no_hp){
                $rules['no_hp'] = 'required|numeric|min:5|unique:user';
            }

            $validation = $request->validate($rules);
            
            try {
                // $user->update($validation);
                User::where('id', $user->id)
                        ->update($validation);

                return redirect()->route('admins.show', $user->id)
                    ->with('success', 'User Update Successfully!');
            } catch (\Exception $e){
                return redirect()->back()
                    ->with('error', 'Error during the creation!');
            }
        }
   
    }

}
