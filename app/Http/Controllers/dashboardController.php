<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paket_wisata;
use App\Models\destinasi_wisata;
use Illuminate\Support\Facades\DB;
use App\Models\konfirmasipesanan;
use App\Models\lihatpesanan;

class dashboardController extends Controller
{
    public function index(){
        $paket_wisata = DB::table('detailwisata')
		->join('destinasi_wisata', 'destinasi_wisata.id_destinasi_wisata', '=', 'detailwisata.id_destinasi_wisata')
		->join('paket_wisata', 'paket_wisata.id_paket_wisata', '=', 'detailwisata.id_paket_wisata')
		->get();
		$destinasi_wisata = destinasi_wisata::all();
        #dd(($destinasi_wisata));
        return view('dashboard',['paket_wisata' => $paket_wisata,'destinasi_wisata' => $destinasi_wisata]);
	}
}
