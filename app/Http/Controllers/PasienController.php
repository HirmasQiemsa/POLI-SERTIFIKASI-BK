<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('pasien.login');
    }
    public function logout(){
        return redirect()->route('login-pasien')->with('succes','Anda telah keluar, Stay Healthy..');
    }
    public function register()
    {
        return view('pasien.register');
    }
    public function dashboard()
    {
        return view('pasien.dashboard');
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
            'no_ktp'=>'required',
        ]);

        $login = [
            'nama'=> $request->nama,
            'no_ktp'=>$request->no_ktp,
        ];

        if($login){
            return redirect()->route('dashboard-pasien')->with('success', 'Selamat datang di Poli Klinik');
        }else{
            return redirect()->route('login-pasien')->with('failed','Login Gagal, Harap Periksa Kembali');
        }
    }
    public function register_proses(Request $request)
    {
        $request ->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'no_ktp'=>'required|numeric|min:16',
            'no_hp'=>'required|numeric',
        ]);

        $data['nama'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['no_ktp'] = $request->no_ktp;
        $data['no_hp'] = $request->no_hp;

        Pasien::create($data);

        $login = [
            'nama'=>'required',
            'no_ktp'=>'required',
        ];

        if($login){
            return redirect()->route('dashboard-pasien')->with('success', 'Pasien baru berhasil terdaftar');
        }else{
            return redirect()->route('login-pasien')->with('failed','Registrasi Gagal, Pasien sudah terdaftar');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        //
    }
}
