<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::latest()->paginate(10);
        // Ulasan
        $ulasans = Ulasan::latest()->paginate(5);
    
        return view('User.index',compact('user','ulasans'),["title" => "User"])
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
        return view('User.create',compact('ulasans'),["title" => "Create User"]);
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
        $validation = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email:dns|unique:user',
            'username' => 'required|min:3|max:255|unique:user',
            'password' => 'required|min:5|max:255|required_with:password-confirm|same:password-confirm',
            // 'password-confirm' => 'required|min:5|max:255',
            'no_hp' => 'required|numeric|min:5|unique:user',
            'alamat' => 'required',
            'role' => 'required'
        ]);

        $validation['password'] = Hash::make($validation['password']);
    
        try {
            User::create($validation);

            return redirect()->route('user.index')
                ->with('success', 'User Created Successfully!');
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
    public function show(User $user)
    {
        $ulasans = Ulasan::latest()->paginate(5);
        return view('User.show',compact('user','ulasans'),["title" => "Show User"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $ulasans = Ulasan::latest()->paginate(5);
        return view('User.edit',compact('user','ulasans'),["title" => "Edit User"]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
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

        // $validation['id'] = auth()->user()->id;
        // $validation['password'] = Hash::make($validation['password']);
        
        try {
            // $user->update($validation);
            User::where('id', $user->id)
                    ->update($validation);

            return redirect()->route('user.index')
                ->with('success', 'User Update Successfully!');
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
    public function destroy(User $user)
    {
        //
        $user->delete();
    
        return redirect()->back();
    }
}
