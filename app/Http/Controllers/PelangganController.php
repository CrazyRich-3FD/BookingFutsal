<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return $pelanggan = Pelanggan::with('user')->paginate(10);
        $pelanggan = Pelanggan::latest()->paginate(10);
        // Ulasan
        $ulasan = Ulasan::latest()->paginate(5);
    
        return view('Pelanggan.index',compact('pelanggan','ulasan'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
   
    }

    public function pelangganList()
    {
        //
        $pelanggan = Pelanggan::latest()->paginate(9);
    
        return view('Pelanggan.pelanggan_list',compact('pelanggan'))
            ->with('i', (request()->input('page', 1) - 1) * 9);
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
        $ulasan = Ulasan::latest()->paginate(5);

        return view('Pelanggan.create',compact('user','ulasan'));
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
            'nama' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required',
            'user_id' => 'required',
            
        ]);

        // Pelanggan::create($request->all());
     
        // return redirect()->route('user.index')
        //                 ->with('success','User Berhasil Ditambahkan.');
    
        try {
            Pelanggan::create($request->all());

            return redirect()->route('pelanggan.index')
                ->with('success', 'Pelanggan Created Successfully!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        $ulasan = Ulasan::latest()->paginate(5);
        return view('Pelanggan.show',compact('pelanggan','ulasan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        //
        $user = User::all();
        $ulasan = Ulasan::latest()->paginate(5);
        return view('Pelanggan.edit',compact('pelanggan','user','ulasan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        //
        $request->validate([
            'nama' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required',
            'user_id' => 'required',
            
        ]);
    
        try {
            $pelanggan->update($request->all());

            return redirect()->route('pelanggan.index')
                ->with('success', 'Pelanggan Update Successfully!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        //
        $pelanggan->delete();
    
        return redirect()->back();
    }
}
