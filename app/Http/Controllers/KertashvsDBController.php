<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KertashvsDBController extends Controller
{
    public function indexhvs()
    {

		// mengambil data dari table kertashvs dengan pagination
		$kertashvs = DB::table('kertashvs')->paginate(20);

    	// mengirim data kertashvs ke view indexhvs
    	return view('indexhvs',['kertashvs' => $kertashvs]);

    }

    // method untuk menampilkan view form tambah kertashvs
	public function tambahhvs()
	{

		// memanggil view tambah
		return view('tambahhvs');

	}

    public function storehvs(Request $request){
        DB::table('kertashvs')->insert([
            'merkkertashvs' => $request->merkkertashvs,
            'stockkertashvs' => $request->stockkertashvs,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/kertashvs');
    }

    public function edithvs($id)
	{
		// mengambil data kertashvs berdasarkan id yang dipilih
		$kertashvs = DB::table('kertashvs')->where('kodekertashvs',$id)->get();
		// passing data kertashvs yang didapat ke view edithvs.blade.php
		return view('edithvs',['kertashvs' => $kertashvs]);

	}

    public function updatehvs(Request $request){
        DB::table('kertashvs')->where('kodekertashvs', $request->kodekertashvs)->update([
                'merkkertashvs' => $request->merkkertashvs,
                'stockkertashvs' => $request->stockkertashvs,
                'tersedia' => $request->tersedia
            ]);
            return redirect('/kertashvs');
    }
    public function hapushvs($id)
	{
		// menghapus data kertashvs berdasarkan id yang dipilih
		DB::table('kertashvs')->where('kodekertashvs',$id)->delete();

		// alihkan halaman ke halaman kertashvs
		return redirect('/kertashvs');
	}

    public function carihvs(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table kertashvs sesuai pencarian data
		$kertashvs = DB::table('kertashvs')
		->where('merkkertashvs','like',"%".$cari."%")
		->paginate();

    		// mengirim data kertashvs ke view indexhvs
		return view('indexhvs',['kertashvs' => $kertashvs]);

	}
}
