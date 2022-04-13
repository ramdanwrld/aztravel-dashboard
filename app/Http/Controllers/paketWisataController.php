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
    	// mengambil data dari table paket_wisata
		$paket_wisata = paket_wisata::all();
		$destinasi_wisata = destinasi_wisata::all();
		$detailwisata = DB::table('detailwisata')
		->join('destinasi_wisata', 'destinasi_wisata.id_destinasi_wisata', '=', 'detailwisata.id_destinasi_wisata')
		->join('paket_wisata', 'paket_wisata.id_paket_wisata', '=', 'detailwisata.id_paket_wisata')
		->get();
		

		return view('paketWisata',['paket_wisata' => $paket_wisata,'destinasi_wisata' => $destinasi_wisata,'detailwisata'=>$detailwisata]);
 
	}

	
	public function tambah()
	{
 
		// memanggil view tambah
 
	}
 
	// method untuk insert data ke table c
	public function store(Request $request)
	{
		// insert data ke table paket_wisata
		$this->validate($request,[
			'nama_paket_wisata' => 'required',
			'harga_paket_wisata' => 'required',
		]);

		$id = DB::table('paket_wisata')->insertGetId([
			'nama_paket_wisata' => $request->nama_paket_wisata,
			'harga_paket_wisata' => $request->harga_paket_wisata
		]);

		DB::table('detailwisata')->insert([
			'id_paket_wisata' => $id,
			'id_destinasi_wisata' => $request->id_destinasi_wisata
		]);

	// alihkan halaman ke halaman paketwisata
		return redirect('/paketwisata');
		
	}
 
	// method untuk edit data paket wisata
	public function edit($id)
	{
		
		$detailwisata = DB::table('detailwisata')->where('id',$id)->get();
		
		return view('paketwisata',['paket_wisata' => $detailwisata]);

	}
 
	// update data paket wisata
	public function update(Request $request)
	{
		
		#dd($request->id_paket_wisata,$request->id_destinasi_wisata,$request->id,$request->nama_paket_wisata,$request->nama_destinasi_wisata);

		DB::table('paket_wisata')->where('id_paket_wisata',$request->id_paket_wisata)->update([
			'nama_paket_wisata' => $request->nama_paket_wisata,
			'harga_paket_wisata' => $request->harga_paket_wisata
		]);
		DB::table('detailwisata')->where('id',$request->id)->update([
			'id_paket_wisata' => $request->id_paket_wisata,
			'id_destinasi_wisata' => $request->id_destinasi_wisata
		]);
		// alihkan halaman ke halaman paketwisata
		return redirect('/paketwisata');
	}
 
	// method untuk hapus data paket wisata
	public function hapus($id)
	{
		// menghapus data paket wisata berdasarkan id yang dipilih
		DB::table('detailwisata')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman paket wisata
		return redirect('/paketwisata');
	}
}
