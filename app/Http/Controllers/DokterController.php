<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('dokter.login');
    }
    public function logout(){
        return redirect()->route('login-dokter')->with('succes','Berhasil keluar, Stay Healthy Dok..');
    }
    public function dashboard()
    {
        return view('dokter.dashboard');
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
    public function login_proses(Request $request)
    {
        $request ->validate([
            'nama'=>'required',
            'password'=>'required',
        ]);

        $login = [
            'nama'=> $request->nama,
            'password'=>$request->password,
        ];

        if($login){
            return redirect()->route('dashboard-dokter')->with('success', 'Dokter berhasil login');
        }else{
            return redirect()->route('login-dokter')->with('failed','Periksa Username dan Password, dok');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        //
    }
}
