<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\destinasi_wisata;

class destinasiWisataController extends Controller
{
    public function index()
	{
    	// mengambil data dari table destinasi_wisata
		$destinasi_wisata = destinasi_wisata::all();
 
    	// mengirim data destinasiwisata ke view index
		return view('destinasiwisata',['destinasi_wisata' => $destinasi_wisata]);
 
	}
 
	
	public function tambah()
	{
 
		// memanggil view tambah
		//
 
	}
 
	
	public function store(Request $request)
	{
		// insert data ke table destinasi_wisata
		$this->validate($request,[
			'nama_destinasi_wisata' => 'required',
			'lokasi_destinasi_wisata' => 'required'
		]);

		DB::table('destinasi_wisata')->insert([
			'nama_destinasi_wisata' => $request->nama_destinasi_wisata,
			'lokasi_destinasi_wisata' => $request->lokasi_destinasi_wisata
		]);

	// alihkan halaman ke halaman destinasi wisata
		return redirect('/destinasiwisata');
		
	}
 
	// method untuk edit data destinasi wiwsata
	public function edit($id_destinasi_wisata)
	{
		// mengambil data destinasi wisata berdasarkan id yang dipilih
		$destinasi_wisata = DB::table('destinasi_wisata')->where('id_destinasi_wisata',$id_destinasi_wisata)->get();
		// passing data destinasi wisata yang didapat ke view destinasiwisata.blade.php
		return view('destinasiwisata',['destinasi_wisata' => $destinasi_wisata]);
 
	}
 
	// update data destinasi wisata
	public function update(Request $request)
	{
		// update data destinasi wisata
		DB::table('destinasi_wisata')->where('id_destinasi_wisata',$request->id_destinasi_wisata)->update([
			'nama_destinasi_wisata' => $request->nama_destinasi_wisata,
		]);
		// alihkan halaman ke halaman destinasi wisata
		return redirect('/destinasiwisata');
	}
 
	// method untuk hapus data destiansi wisata
	public function hapus($id_destinasi_wisata)
	{
		// menghapus data obat berdasarkan id yang dipilih
		DB::table('destinasi_wisata')->where('id_destinasi_wisata',$id_destinasi_wisata)->delete();
		
		// alihkan halaman ke halaman destiansi wisata
		return redirect('/destinasiwisata');
	}
}
