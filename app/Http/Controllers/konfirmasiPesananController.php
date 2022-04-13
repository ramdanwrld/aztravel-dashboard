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
    	// mengambil data dari table obat
        $konfirmasi_pesanan = konfirmasipesanan::all();

		
    	// mengirim data obat ke view index
		return view('konfirmasipesanan',['konfirmasi_pesanan' => $konfirmasi_pesanan]);
 
	}
}
