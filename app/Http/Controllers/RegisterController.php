<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(){
        return view('register');
    }
    public function store(Request $request){
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'role_id'=>$request->role,
            'password' => Hash::make($request->password),
        ]);
         return redirect('/login');
    }
    public function storeAdmin(Request $request){
        // dd($request->all());
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'role_id'=>$request->role,
            'password' => Hash::make($request->password),
        ]);
         return redirect('/admin');
    }
}
