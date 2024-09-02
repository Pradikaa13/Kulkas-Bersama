<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function storeDonasi(Request $request){
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required'],
        //     'phone' => ['required'],
        //     'address' => ['required'],
        //     'nominal' => ['required', 'integer'],
        //     'receipt' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);

        $imagePath = $request->receipt->extension();

        $file = $request->file('receipt')->move(public_path('img'), $request->file('receipt')->getClientOriginalName());

        $final = $request->file('receipt')->getClientOriginalName();

        Donation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'nominal'=> $request->nominal,
            'receipt' => $final,
        ]);

        return redirect()->route('home')->with('success', 'Donasi berhasil dikirim');
    }
}
