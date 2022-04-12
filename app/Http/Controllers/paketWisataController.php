<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\paket_wisata;

class paketWisataController extends Controller
{
    public function index()
	{
    	// mengambil data dari table obat
		$paket_wisata = paket_wisata::all();
 
    	// mengirim data obat ke view index
		return view('paketWisata',['paket_wisata' => $paket_wisata]);
 
	}
 
	// method untuk menampilkan view form tambah obat
	public function tambah()
	{
 
		// memanggil view tambah
 
	}
 
	// method untuk insert data ke table obat
	public function store(Request $request)
	{
		// insert data ke table obat
		$this->validate($request,[
			'nama_paket_wisata' => 'required',
		]);

		DB::table('paket_wisata')->insert([
			'nama_paket_wisata' => $request->nama_paket_wisata,
		]);

	// alihkan halaman ke halaman obat
		return redirect('/paketwisata');
		
	}
 
	// method untuk edit data obat
	public function edit($id_paket_wisata)
	{
		// mengambil data obat berdasarkan id yang dipilih
		$paket_wisata = DB::table('paket_wisata')->where('id_paket_wisata',$id_paket_wisata)->get();
		// passing data obat yang didapat ke view edit.blade.php
		return view('paketwisata',['paket_wisata' => $paket_wisata]);
 
	}
 
	// update data obat
	public function update(Request $request)
	{
		// update data obat
		DB::table('paket_wisata')->where('id_paket_wisata',$request->id_paket_wisata)->update([
			'nama_paket_wisata' => $request->nama_paket_wisata,
		]);
		// alihkan halaman ke halaman obat
		return redirect('/paketwisata');
	}
 
	// method untuk hapus data obat
	public function hapus($id_paket_wisata)
	{
		// menghapus data obat berdasarkan id yang dipilih
		DB::table('paket_wisata')->where('id_paket_wisata',$id_paket_wisata)->delete();
		
		// alihkan halaman ke halaman obat
		return redirect('/paketwisata');
	}
}
