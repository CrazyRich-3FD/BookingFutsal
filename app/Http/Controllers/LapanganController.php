<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;
use App\Models\Ulasan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class LapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lapangan = Lapangan::latest()->paginate(10);
        // Ulasan
        $ulasans = Ulasan::latest()->paginate(5);
    
        return view('Lapangan.index',compact('lapangan','ulasans'),["title" => "Lapangan"])
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lapanganList()
    {
        //
        $lapangan = Lapangan::latest()->paginate();
    
        return view('Lapangan.lapangan_list',compact('lapangan'),["title" => "List-Lapangan"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ulasans = Ulasan::latest()->paginate(5);
        return view('Lapangan.create',compact('ulasans'),["title" => "Create Lapangan"]);
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
        'nama' => 'required',
        'jenis_lapangan' => 'required',
        'harga_normal' => 'required',
        'harga_weekend' => 'required',
        'status'=> 'required',
        'deskripsi' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'     
        ]);
                  
        $input = $request->all();
                  
        if ($request->file('gambar')) {
            $input['gambar'] = $request->file('gambar')->store('lapangan');
        }

        try {
            Lapangan::create($input);

            return redirect()->route('lapangan.index')
                ->with('success', 'Lapangan Created Successfully!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lapangan  $lapangan
     * @return \Illuminate\Http\Response
     */
    public function show(Lapangan $lapangan)
    {
        $ulasans = Ulasan::latest()->paginate(5);
        return view('Lapangan.show',compact('lapangan','ulasans'),["title" => "Show Lapangan"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lapangan $lapangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Lapangan $lapangan)
    {
        $ulasans = Ulasan::latest()->paginate(5);
        return view('Lapangan.edit',compact('lapangan','ulasans'),["title" => "Update Lapangan"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lapangan  $lapangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lapangan $lapangan)
    {
        //
        $request->validate([
            'nama' => 'required',
            'jenis_lapangan' => 'required',
            'harga_normal' => 'required',
            'harga_weekend' => 'required',
            'status'=> 'required',
            'deskripsi' => 'required',
        ]);

        $input = $request->all();
  
        if ($request->file('gambar')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $input['gambar'] = $request->file('gambar')->store('lapangan');
            
        }
          
        try {
            $lapangan->update($input);

            return redirect()->route('lapangan.index')
                ->with('success', 'Lapangan Update Successfully!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
                  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lapangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $lapangan = Lapangan::find($id); 

        if($lapangan->gambar){
            Storage::delete($lapangan->gambar);
        }

        $lapangan->delete();
        return redirect()->back();
    }
}
