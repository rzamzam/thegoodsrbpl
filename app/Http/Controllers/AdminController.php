<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use App\Models\Products;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showAdmin()
    {
        $users = User::where('role_id', '2')->orWhere('role_id', '3')->get();
        return view('admin.admin', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = Employee::create([
            'name' => $request->name,
            'age' => $request->age,
            'role' => $request->role,
        ]);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
