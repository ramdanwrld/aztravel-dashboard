<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paket_wisata;
use App\Models\destinasi_wisata;
use Illuminate\Support\Facades\DB;
use App\Models\konfirmasipesanan;

class konfirmasiPesananController extends Controller
{
    public function index()
	{
    	// mengambil data dari table konfirmasi_pesanan
        $konfirmasi_pesanan = konfirmasipesanan::all();

		
    	// mengirim data konfirmasi pesanan ke view index
		return view('konfirmasipesanan',['konfirmasi_pesanan' => $konfirmasi_pesanan]);
 
	}
	public function konfirmasi($id){
		DB::table('konfirmasi_pesanan')->where('id',$id)->update([
			'status' => "SUDAH LUNAS"
		]);

	// alihkan halaman ke halaman konfirmasi pesanan
		return redirect('/konfirmasipesanan');
	}
	public function hapus($id)
	{
		// menghapus data konfirmasi pesanan berdasarkan id yang dipilih
		DB::table('konfirmasi_pesanan')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman konfirmasi pesanan
		return redirect('/konfirmasipesanan');
	}
}