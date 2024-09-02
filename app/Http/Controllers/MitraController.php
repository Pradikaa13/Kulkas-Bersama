<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;
use App\Models\User;

class MitraController extends Controller
{
    public function storePengajuanKemitraan(Request $request, $id)
    {
        $user = User::findorfail($id);
        $user->update([
            'mitra' => 2,
        ]);

        Mitra::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'status'=> "Belum di konfirmasi",
            'user_id' => $id,
        ]);

        return redirect()->route('kemitraan')->with('info', 'mitra berhasil ditambahkan');
    }

    public function acceptPengajuanKemitraan($id, $user)
    {
        $koleksi = Mitra::findorfail($id);
        $koleksi->update([
            'status' => "Accepted, menunggu pembayaran",
        ]);
        $user = User::findorfail($koleksi['user_id']);
        $user->update([
            'mitra' => 3,
            'pembayaran' => 1,
            'mitra_id' => $id,
        ]);

        return redirect()->back()->with('info', 'Koleksi berhasil diupdate');
    }

    public function deniedPengajuanKemitraan($id, $user)
    {
        
        $koleksi = Mitra::findorfail($id);
        $koleksi->update([
            'status' => "Denied",
        ]);
        $user = User::findorfail($koleksi->id);
        $user->update([
            'mitra' => 4,
        ]);
        return redirect()->back()->with('info', 'Koleksi berhasil diupdate');
    }
}
