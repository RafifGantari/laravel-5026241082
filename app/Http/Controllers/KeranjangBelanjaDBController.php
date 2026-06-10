<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaDBController extends Controller
{
    public function index()
    {

		// mengambil data dari table keranjangbelanja dengan pagination
		$keranjangbelanja = DB::table('keranjangbelanja')->paginate(20);

    	// mengirim data keranjangbelanja ke view indexkeranjangbelanja
    	return view('keranjangbelanja.index',['keranjangbelanja' => $keranjangbelanja]);

    }

    // method untuk menampilkan view form tambah keranjangbelanja
	public function create()
	{
		// memanggil view tambah
		return view('keranjangbelanja.create');

	}

    public function store(Request $request){
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        return redirect()->route('keranjangbelanja.index');
    }
    public function destroy($ID)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect()->route('keranjangbelanja.index');
	}
}
