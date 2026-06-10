<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahDBController extends Controller
{
    public function index()
    {

		// mengambil data dari table nilaikuliah dengan pagination
		$nilaikuliah = DB::table('nilaikuliah')->paginate(20);

    	// mengirim data nilaikuliah ke view indexnilaikuliah
    	return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]);

    }

    // method untuk menampilkan view form tambah nilaikuliah
	public function create()
	{
		// memanggil view tambah
		return view('nilaikuliah.create');

	}

    public function store(Request $request){
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        return redirect()->route('nilaikuliah.index');
    }
    public function destroy($ID)
	{
		// menghapus data nilaikuliah berdasarkan id yang dipilih
		DB::table('nilaikuliah')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman nilaikuliah
		return redirect()->route('nilaikuliah.index');
	}
}
