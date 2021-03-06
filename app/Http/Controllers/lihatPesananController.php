<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paket_wisata;
use App\Models\destinasi_wisata;
use App\Models\konfirmasipesanan;
use Illuminate\Support\Facades\DB;
use App\Models\lihatpesanan;

class lihatPesananController extends Controller
{
    public function index()
	{
    	// mengambil data dari table konfirmasi pesanan
        $lihat_pesanan = DB::table('konfirmasi_pesanan')
		->where('status', '=', "SUDAH LUNAS")
                ->get();
		
    	// mengirim data konfirmasi pesanan ke lihatpesanan.blade.php
		return view('lihatpesanan',['lihat_pesanan' => $lihat_pesanan]);
 
	}
}
