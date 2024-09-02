<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\User;
use App\Models\ShareFood;
use App\Models\Donation;
use App\Models\Pembayaran;
use DB;
use App\Models\Mitra;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    
     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function indexMenu()
    {
        $kulkas1= Food::All()->where('kulkas', 'kulkas1');
        $kulkas2= Food::All()->where('kulkas', 'kulkas2');
        $kulkas3= Food::All()->where('kulkas', 'kulkas3');
        $kulkas4= Food::All()->where('kulkas', 'kulkas4');
        $kulkas5= Food::All()->where('kulkas', 'kulkas5');
        $data= Auth::user();
        return view('user.menu', compact('kulkas1','kulkas2','kulkas3','kulkas4','kulkas5','data'));
    }

    public function indexContact()
    {
        $data= Auth::user();
        return view('user.contact', compact('data'));
    }

    public function indexAbout()
    {
        $data= Auth::user();
        return view('user.about', compact('data'));
    }

    public function indexDonasi()
    {
        $data= Auth::user();
        return view('user.donasi', compact('data'));
    }

    public function indexShareMakanan()
    {
        $data= Auth::user();
        return view('user.sharemakanan', compact('data'));
    }

    public function storeShareMakanan(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required'],
        //     'phone' => ['required'],
        //     'address' => ['required'],
        //     'nominal' => ['required', 'integer'],
        //     'receipt' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $imagePath = $request->foto->extension();

        $file = $request->file('foto')->move(public_path('food'), $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath);

        $final = $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath;

        Food::create([
            'name' => $request->foodname,
            'desc' => $request->desc,
            'kulkas' => $request->kulkas,
            'foto'=> $final,
        ]);

        ShareFood::create([
            'name' => $request->foodname,
            'desc' => $request->desc,
            'user_name' => $request->name,
            'foto'=> $final,
            'kulkas' => $request->kulkas,
        ]);

        return redirect()->route('menu');
    }

    public function indexKemitraan()
    {
        $data= Auth::user();
        return view('user.kemitraan', compact('data'));
    }

    public function indexPengajuanKemitraan()
    {
        $data= Auth::user();
        return view('user.pengajuankemitraan', compact('data'));
    }

    public function pembayaranMitra()
    {
        $data= Auth::user();
        return view('user.pembayaran', compact('data'));
    }

    public function storePembayaran($id, Request $request)
    {
        $user = User::findorfail($id);
        $user->update([
            'mitra' => '1',
            'pembayaran' => '0',
        ]);

        $mitra = Mitra::findorfail($user['mitra_id']);

        $mitra->update([
            'status' => 'Accepted, pembayaran telah dikonfirmasi',
        ]);

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $imagePath = $request->foto->extension();

        $file = $request->file('foto')->move(public_path('pembayaran'), $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath);

        $final = $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath;

        Pembayaran::create([
            'firstname' => $request->name,
            'lastname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'foto' => $final,
        ]);
        return redirect()->route('kemitraan')->with('success', 'Pembayaran Berhasil');
    }

}
