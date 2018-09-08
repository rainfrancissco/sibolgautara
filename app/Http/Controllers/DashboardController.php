<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use Session;

use App\Warga;

class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    // Index Dashboard
    public function index(){
    	// sql syntax
    	// select count(*) as DataWarga from warga
    	$DataWarga = Warga::all();
    	$TotalDataWarga = $DataWarga->count();

    	// Max
		//select kelurahan, count(id_kelurahan) as jumlah from rv_kelurahan1 c group by id_kelurahan order by jumlah desc limit 1
    	$MaxWarga = DB::table('rv_kelurahan1')
			->select(DB::raw('kelurahan, count(id_kelurahan) as jumlah'))
            ->groupBy('id_kelurahan')
            ->orderBy('jumlah', 'desc')
            ->limit(1)
            ->get();

        //Min
        //select kelurahan, count(id_kelurahan) as jumlah from rv_kelurahan1 c group by id_kelurahan order by jumlah asc limit 1
        $MinWarga = DB::table('rv_kelurahan1')
			->select(DB::raw('kelurahan, count(id_kelurahan) as jumlah'))
            ->groupBy('id_kelurahan')
            ->orderBy('jumlah', 'asc')
            ->limit(1)
            ->get();

		return view('dashboard.index', compact('TotalDataWarga', 'MaxWarga', 'MinWarga'));
    }

}
