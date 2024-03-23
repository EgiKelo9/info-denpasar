<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\User;
use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\UpdateRegisterRequest;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/register', [
            "title" => "Daftar Akun"
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required','min:8','max:255','unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);
        return redirect('/login');
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
    public function store(StoreRegisterRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegisterRequest $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
