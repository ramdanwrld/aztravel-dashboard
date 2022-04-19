<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\destinasi;

class destinasiController extends Controller
{
    public function index()
	{
    	// mengambil data dari table destinasi
		$destinasi = destinasi::all();
 
    	// mengirim data destinasi ke view index
		return view('destinasi',['destinasi' => $destinasi]);
 
	}
 
	// method untuk menampilkan view form tambah obat
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambahdestinasi');
 
	}
 
	
	public function store(Request $request)
	{
		// insert data ke table destinasi
		$this->validate($request,[
			'destinasi' => 'required',
		]);

		DB::table('destinasi')->insert([
			'destinasi' => $request->destinasi,
		]);

	// alihkan halaman ke halaman destinasi
		return redirect('/destinasi');
		
	}
 
	// method untuk edit
	public function edit($id)
	{
		// mengambil data destinasi berdasarkan id yang dipilih
		$obat = DB::table('destinasi')->where('id_paket_wisata',$id)->get();
		// passing data obat yang didapat ke view edit.blade.php
		return view('edit',['obat' => $obat]);
 
	}
 
	// update data
	public function update(Request $request)
	{
		// update data
		DB::table('destinasi')->where('id_paket_wisata',$request->id_paket_wisata)->update([
			'destinasi' => $request->destinasi,
		]);
		// alihkan halaman ke halaman destinasi
		return redirect('/destinasi');
	}
 
	// method untuk hapus data
	public function hapus($id)
	{
		// menghapus data destinasi berdasarkan id yang dipilih
		DB::table('destinasi')->where('kode',$id)->delete();
		
		// alihkan halaman ke halaman obat
		return redirect('/destinasi');
	}
}
