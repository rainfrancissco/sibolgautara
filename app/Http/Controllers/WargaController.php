<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\User;
use App\Kelurahan;
use App\Warga;
use App\KepalaKeluarga;
use Session;
use Validator;

class WargaController extends Controller
{
    //

	protected function index($id_warga){
		// select warga.id_warga, warga.nama, warga.id_hubungan from warga, kepalakeluarga WHERE kepalakeluarga.id_warga = warga.id_kepalakeluarga
		// $USER = DB::TABLE('tblkelurahan')->WHERE('id_kelurahan', 1)->FIRST();
		// $users = DB::table('warga', 'kepalakeluarga')->select('kepala_keluarga.id_warga as idkepalakeluarga', 'warga.id_warga as idwarga', 'warga.nama', 'warga.id_hubungan', 'warga.nama as namawarga')->WHERE('idkepalakeluarga', 'idwarga')->get();

		// $users = DB::table('warga', 'kepalakeluarga')
		//   ->select(DB::raw("
		//   kepala_keluarga.id_warga as idkepalakeluarga,
		//   warga.id_warga as idwarga,
		//   warga.nama as namawarga,
		//   WHERE kepalakeluarga.id_warga = warga.id_kepalakeluarga")
		// );

		//select * from warga join kepalakeluarga on warga.id_kepalakeluarga = kepalakeluarga.id_warga
		//case when warga.id_hubungan=0 then 'Suami' else 'Istri' end as hubungan
		$Qwarga = DB::table('warga')
			->select(DB::raw('*,warga.id_warga as WargaId, case when warga.id_hubungan = 0 then "Kepala Keluarga"
									  when warga.id_hubungan = 1 then "Suami"
									  when warga.id_hubungan = 2 then "Istri"
									  when warga.id_hubungan = 3 then "Anak"
									  when warga.id_hubungan = 4 then "Saudara Lain"
			 else "Istri" end as hubungan'))
            ->leftjoin('kepalakeluarga', 'kepalakeluarga.id_warga', '=', 'warga.id_kepalakeluarga')
            ->where('warga.isactive', '=', 'Y')
            ->where('warga.id_kepalakeluarga', '=', $id_warga)
            ->orwhere('warga.id_warga', '=', $id_warga)
            ->get();

        $IdKepalaKeluarga = $id_warga;

        //echo $IdWarga;

		return view('warga.anggotakeluarga', compact('Qwarga', 'IdKepalaKeluarga'));

		//ECHO $users->idwarga;

		// $anggotakeluarga_list = Warga::all();
		// $anggotakeluarga = Warga::findOrFail($id_warga);
		// return view('warga.anggotakeluarga', compact('anggotakeluarga','anggotakeluarga_list'));

	}

	protected function createwarga($id_warga){
		// $list_kelurahan = Kelurahan::lists('kelurahan', 'id_kelurahan');
		// return view ('warga.createwarga', compact('list_kelurahan'));

        $IdWarga = $id_warga;

        //echo $IdWarga;

		return view('warga.createwarga', compact('IdWarga'));
	}

	protected function show($id_warga){
		// return view ('warga.createkk');

		$list_kelurahan = Kelurahan::lists('kelurahan', 'id_kelurahan');
		return view ('warga.createkk', compact('list_kelurahan'));
	}

	public function editwarga($id_warga){
		$Warga = Warga::findOrFail($id_warga);
		
		//$IdWarga1 = Warga::all();
		$IdWarga1 = $Warga->where('id_warga', "$id_warga");
		// ->pluck('id_kepalakeluarga');

		$IdWarga = $IdWarga1->value('id_kepalakeluarga');
		$list_kelurahan = Kelurahan::lists('kelurahan', 'id_kelurahan');
		return view('warga.editwarga', compact('Warga', 'list_kelurahan', 'IdWarga'));


		// $KepalaKeluarga = KepalaKeluarga::findOrFail($id_warga);
		// $Warga = Warga::findOrFail($id_warga);
		// return view('warga.editkk', compact('KepalaKeluarga', 'Warga'));
	}

	public function updatewarga($id_warga, Request $request){
		$Warga = Warga::findOrFail($id_warga);
		$data = $request->all();

		$validasi = Validator::make($data, [
			//tabel warga
			'nik'			=> 'required|max:255',
			'nama'			=> 'required|max:50',
			'jenis_kelamin'	=> 'required',
			'id_hubungan'	=> 'required',
			'tempat_lahir'	=> 'required',
			'tanggal_lahir' => 'required',
			'id_kawin'		 => 'required',
			'id_agama'		 => 'required',
			'id_lembaga'	 => 'required',
			'id_wni'		 => 'required',
			'id_suku'		 => 'required',
			'id_pendidikan'	 => 'required',
			'id_bacatulis'	 => 'required',
			'id_matapencarian'	 => 'required',
			'nama_ayah'		 => 'required',
			'nama_ibu'		 => 'required',
			'akta_lahir',
			'id_ektp'		=> 'required',
			'id_kb'			=> 'required',
			'id_kemiskinan'	=> 'required',
			'id_rumah'		=> 'required',
			'id_pbb'		=> 'required',
			'id_penghasilan'=> 'required',
			'id_lahan'		=> 'required',
			'id_sumberair'	=> 'required',
			'id_bantuan'	=> 'required',
			'id_berobat'	=> 'required',
			'id_penerangan'	=> 'required',
			'id_memasak'	=> 'required',
			'ternak',
			'kendaraan',
			'kelainan',
			'usaha',
			'id_bangunan'	=> 'required',
			'tanggungan'	=> 'required',
			'id_penduduk'	=> 'required',
			'id_user'	=> 'required'
		]);

		if($validasi->fails()){
			return redirect("warga/$id_warga/editkk")
						-> withErrors($validasi)
						-> withInput();
		}

		$IdKepalaKeluarga = $request->input('id_kepalakeluarga');

		if($validasi->fails()){
			return redirect('warga/' . $IdKepalaKeluarga .'/anggotakeluarga')
						->withInput()
						->witherrors($validasi);
		}

		$WargaUpdate = $Warga->update($data);

		Session::flash('flash_message', 'Data user berhasil disimpan.');
		return redirect('warga/' . $IdKepalaKeluarga .'/anggotakeluarga');

	}

	public function store(Request $request){
		$data = $request->all();

		$validasi = Validator::make($data, [
			//tabel warga
			'nik'			=> 'required|max:255',
			'nama'			=> 'required|max:50',
			'jenis_kelamin'	=> 'required',
			'id_hubungan'	=> 'required',
			'tempat_lahir'	=> 'required',
			'tanggal_lahir' => 'required',
			'id_kawin'		 => 'required',
			'id_agama'		 => 'required',
			'id_lembaga',
			'id_wni'		 => 'required',
			'id_suku'		 => 'required',
			'id_pendidikan'	 => 'required',
			'id_bacatulis'	 => 'required',
			'id_matapencarian',
			'nama_ayah'		 => 'required',
			'nama_ibu'		 => 'required',
			'akta_lahir',
			'id_ektp'		=> 'required',
			'id_kb'			=> 'required',
			'id_kemiskinan'	=> 'required',
			'id_rumah'		=> 'required',
			'id_pbb'		=> 'required',
			'id_penghasilan'=> 'required',
			'id_lahan'		=> 'required',
			'id_sumberair'	=> 'required',
			'id_bantuan'	=> 'required',
			'id_berobat'	=> 'required',
			'id_penerangan'	=> 'required',
			'id_memasak'	=> 'required',
			'ternak',
			'kendaraan',
			'kelainan',
			'usaha',
			'id_bangunan'	=> 'required',
			'tanggungan'	=> 'required',
			'id_penduduk'	=> 'required',
			'id_user'	=> 'required'
		]);

		$IdKepalaKeluarga = $request->input('id_kepalakeluarga');

		if($validasi->fails()){
			return redirect('warga/' . $IdKepalaKeluarga .'/anggotakeluarga')
						->withInput()
						->witherrors($validasi);
		}

		$warga = Warga::create($data);

		Session::flash('flash_message', 'Data user berhasil disimpan.');
		return redirect('warga/' . $IdKepalaKeluarga .'/anggotakeluarga');
	}

	public function deletewarga($id_warga){
		// $warga = Warga::findOrFail($id_warga);
		// //$IdKepalaKeluarga = $request->input('id_kepalakeluarga');
		// $warga -> delete();
		// // return redirect()->back();

		$Qwarga = DB::table('warga')
			->select(DB::raw('*'))
            ->where('id_warga', '=', $id_warga)
            ->delete();

        $Qwarga1 = DB::table('kepalakeluarga')
			->select(DB::raw('*'))
            ->where('id_warga', '=', $id_warga)
            ->delete();

        return redirect()->back();

        // $Qwarga -> delete();

	}


	public function __construct(){
        $this->middleware('auth');
    }

}
