<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Mitra;
use App\Models\Food;
use App\Models\ShareFood;
use DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function indexAdmin()
    {
        return view('admin.admin');
    }

    public function indexDetailDonasi()
    {
        $data = Donation::All();
        return view('admin.detaildonasi', compact('data'));
    }

    public function indexDetailKulkas()
    {
        $kulkas1= Food::All()->where('kulkas', 'kulkas1');
        $kulkas2= Food::All()->where('kulkas', 'kulkas2');
        $kulkas3= Food::All()->where('kulkas', 'kulkas3');
        $kulkas4= Food::All()->where('kulkas', 'kulkas4');
        $kulkas5= Food::All()->where('kulkas', 'kulkas5');
        return view('admin.detailkulkas', compact('kulkas1','kulkas2','kulkas3','kulkas4','kulkas5'));
    }

    public function deleteMenu($id){
        $data = Food::findorfail($id);
        $data->delete();
        return back()->with('info', 'Food berhasil dihapus');
    }

    public function indexEditKulkas($id)
    {
        $data = Food::findorfail($id);
        return view('admin.editmakanan', compact('data'));
    }

    public function editMenu(Request $request, $id){
        $data = $request->validate([
            'foto' => 'unique:food,foto',
        ]); 

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $imagePath = $request->foto->extension();

        $file = $request->file('foto')->move(public_path('food'), $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath);

        $final = $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath;

        $food = Food::findorfail($id);
        $food->update([
            'foto' => $final,
            'name' => $request->foodname,
            'desc' => $request->desc,
            'kulkas' => $request->kulkas,
        ]);

        return redirect()->route('detailkulkas')->with('info', 'Food berhasil diupdate');
    
    }

    public function indexPengajuanKemitraan()
    {
        return view('admin.pengajuankemitraan');
    }

    public function indexPermohonanAdmin()
    {
        $user = Auth::user();
        $data = Mitra::All();
        return view('admin.permohonanadmin' , compact('data', 'user'));
    }
}
