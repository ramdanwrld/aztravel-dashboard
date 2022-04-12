<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\paket_wisata;
use App\Models\destinasi_wisata;
use App\Models\detailwisata;

class paketWisataController extends Controller
{
    public function index()
	{
    	// mengambil data dari table obat
		$paket_wisata = paket_wisata::all();
		$destinasi_wisata = destinasi_wisata::all();
		$detailwisata = DB::table('detailwisata')
		->join('destinasi_wisata', 'destinasi_wisata.id_destinasi_wisata', '=', 'detailwisata.id_destinasi_wisata')
		->join('paket_wisata', 'paket_wisata.id_paket_wisata', '=', 'detailwisata.id_paket_wisata')
		->get();
 
    	// mengirim data obat ke view index
		return view('paketWisata',['paket_wisata' => $paket_wisata,'destinasi_wisata' => $destinasi_wisata,'detailwisata'=>$detailwisata]);
 
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

		$id = DB::table('paket_wisata')->insertGetId([
			'nama_paket_wisata' => $request->nama_paket_wisata,
		]);

		DB::table('detailwisata')->insert([
			'id_paket_wisata' => $id,
			'id_destinasi_wisata' => $request->id_destinasi_wisata
		]);

	// alihkan halaman ke halaman obat
		return redirect('/paketwisata');
		
	}
 
	// method untuk edit data obat
	public function edit($id)
	{
		// mengambil data obat berdasarkan id yang dipilih
		$paket_wisata = DB::table('detailwisata')->where('id',$id)->get();
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
	public function hapus($id)
	{
		// menghapus data obat berdasarkan id yang dipilih
		DB::table('detailwisata')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman obat
		return redirect('/paketwisata');
	}
}
