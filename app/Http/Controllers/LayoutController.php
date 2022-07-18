<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ulasan = Ulasan::latest()->paginate(5);
    
        return view('layouts.home',compact('ulasan'),["title" => "Home"]);
    }

    public function show(User $user)
    {
        if($user = Auth::user()){
        return view('layouts.profile',compact('user'),["title" => "Profile"]);
        }
    }

    public function edit()
    {
        return view('layouts.edit-profile',["title" => "Edit Profile"]);
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
                User::where('id', $user->id)
                        ->update($validation);

                return redirect()->route('profile', $user->id)
                    ->with('success', 'User Update Successfully!');
            } catch (\Exception $e){
                return redirect()->back()
                    ->with('error', 'Error during the creation!');
            }
        }
    }
}
