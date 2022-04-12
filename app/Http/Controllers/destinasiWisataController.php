<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\destinasi_wisata;

class destinasiWisataController extends Controller
{
    public function index()
	{
    	// mengambil data dari table obat
		$destinasi_wisata = destinasi_wisata::all();
 
    	// mengirim data obat ke view index
		return view('destinasiwisata',['destinasi_wisata' => $destinasi_wisata]);
 
	}
 
	// method untuk menampilkan view form tambah obat
	public function tambah()
	{
 
		// memanggil view tambah
		//
 
	}
 
	// method untuk insert data ke table obat
	public function store(Request $request)
	{
		// insert data ke table obat
		$this->validate($request,[
			'nama_destinasi_wisata' => 'required',
			'lokasi_destinasi_wisata' => 'required'
		]);

		DB::table('destinasi_wisata')->insert([
			'nama_destinasi_wisata' => $request->nama_destinasi_wisata,
			'lokasi_destinasi_wisata' => $request->lokasi_destinasi_wisata
		]);

	// alihkan halaman ke halaman obat
		return redirect('/destinasiwisata');
		
	}
 
	// method untuk edit data obat
	public function edit($id_destinasi_wisata)
	{
		// mengambil data obat berdasarkan id yang dipilih
		$destinasi_wisata = DB::table('destinasi_wisata')->where('id_destinasi_wisata',$id_destinasi_wisata)->get();
		// passing data obat yang didapat ke view edit.blade.php
		return view('destinasiwisata',['destinasi_wisata' => $destinasi_wisata]);
 
	}
 
	// update data obat
	public function update(Request $request)
	{
		// update data obat
		DB::table('destinasi_wisata')->where('id_destinasi_wisata',$request->id_destinasi_wisata)->update([
			'nama_destinasi_wisata' => $request->nama_destinasi_wisata,
		]);
		// alihkan halaman ke halaman obat
		return redirect('/destinasiwisata');
	}
 
	// method untuk hapus data obat
	public function hapus($id_destinasi_wisata)
	{
		// menghapus data obat berdasarkan id yang dipilih
		DB::table('destinasi_wisata')->where('id_destinasi_wisata',$id_destinasi_wisata)->delete();
		
		// alihkan halaman ke halaman obat
		return redirect('/destinasiwisata');
	}
}
