<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ulasans = Ulasan::latest()->paginate(10);
    
        return view('Ulasan.index',compact('ulasans'),["title" => "Ulasan"])
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ulasans = Ulasan::latest()->paginate(5);
        return view('Ulasan.create',compact('ulasan','ulasans'),["title" => "Create Ulasan"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

         $request->validate([
            'nama' => 'required',
            'ulasan' => 'required'
        ]);

        $input = $request ->all();

        try {
            Ulasan::create($input);

            return redirect()->route('ulasan.index')
                ->with('success', 'Ulasan Created Successfully!');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ulasan  $ulasan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ulasan $ulasan)
    {
        $ulasans = Ulasan::latest()->paginate(5);
        return view('Ulasan.edit',compact('ulasan','ulasans'),["title" => "Update Ulasan"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ulasan  $ulasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ulasan $ulasan)
    {
        $request->validate([
            'nama' => 'required',
            'ulasan' => 'required'
        ]);

        $input = $request ->all();

        try {
            $ulasan->update($input);

            return redirect()->route('ulasan.index')
                ->with('success', 'Ulasan Updated Successfully!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ulasan $ulasan)
    {
        $ulasan->delete();
    
        return redirect()->back();
    }
}
