<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Registrasi.index',["title" => "Registrasi"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return request()->all();
        $validation = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email:dns|unique:user',
            'username' => 'required|min:3|max:255|unique:user',
            'password' => 'required|min:5|max:255|required_with:password-confirm|same:password-confirm',
            'password-confirm' => 'required|min:5|max:255',
            'no_hp' => 'required|numeric|min:5|unique:user',
            'level' => 'required',
            'role' => 'required'
        ]);

        $validation['password'] = Hash::make($validation['password']);
        User::create($validation);
        // $request->session()->flash('success', 'Registration successful! Please login');
        return redirect('/login')->with('success', 'Registration successful! Please login');
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
