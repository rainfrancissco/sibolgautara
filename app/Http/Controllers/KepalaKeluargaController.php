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
use Illuminate\Support\Facades\Auth;


class KepalaKeluargaController extends Controller
{
    //

	protected function index(){
		//cek id kelurahan
		$kel = Auth::user()->id_kelurahan;

		//cek admin
		$admin = Auth::user()->level;
		if($admin == 'admin' ){
			$kepalakeluarga_list = KepalaKeluarga::all()->where('isactive', 'Y');		
		}
		else{
			$kepalakeluarga_list = KepalaKeluarga::all()->where('id_kelurahan', $kel);		
		}
			
		return view('warga.index', compact('kepalakeluarga_list'));
	}

	protected function createkk(){
		$list_kelurahan = Kelurahan::lists('kelurahan', 'id_kelurahan');
		return view ('warga.createkk', compact('list_kelurahan'));
	}

	public function store(Request $request){
		$data = $request->all();

		$validasi = Validator::make($data, [
			// tabel kepalakeluarga
			'id_kepalakeluarga',
			'nokk'			=> 'required|string|max:30',
			'alamat'		=> 'required',
			'lingkungan'	=> 'required',
			'id_user'		=> 'required',
			'id_kelurahan'	=> 'required',

			//tabel warga
			'nik'			=> 'required|max:255',
			'nama'			=> 'required|max:50',
			'jenis_kelamin'	=> 'required',
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
			return redirect('warga/createkk')
						->withInput()
						->witherrors($validasi);
		}

		$warga = Warga::create($data);

		$kepalakeluarga = new KepalaKeluarga;
		$kepalakeluarga->nokk 		= $request->input('nokk');
		$kepalakeluarga->id_kelurahan	= $request->input('id_kelurahan');
		$kepalakeluarga->alamat		= $request->input('alamat');
		$kepalakeluarga->lingkungan	= $request->input('lingkungan');
		$kepalakeluarga->id_user 	= $request->input('id_user');
		$kepalakeluarga->isactive	= 'Y';

		$warga->kepalakeluarga()->save($kepalakeluarga);

		Session::flash('flash_message', 'Data user berhasil disimpan.');
		return redirect('warga');
	}

	public function editkk($id_warga){

		$KepalaKeluarga = KepalaKeluarga::findOrFail($id_warga);
		$list_kelurahan = Kelurahan::lists('kelurahan', 'id_kelurahan');
		return view('warga.editkk', compact('KepalaKeluarga', 'list_kelurahan'));


		// $KepalaKeluarga = KepalaKeluarga::findOrFail($id_warga);
		// $Warga = Warga::findOrFail($id_warga);
		// return view('warga.editkk', compact('KepalaKeluarga', 'Warga'));
	}

	public function updatekk($id_warga, Request $request){
		$KepalaKeluarga = KepalaKeluarga::findOrFail($id_warga);
		$data = $request->all();

		$validasi = Validator::make($data, [
			//tabel warga
			'id_warga'		=> 'required|max:255',
			'nokk'			=> 'required',
			'alamat'		=> 'required',
			'lingkungan'	=> 'required',
		]);

		if($validasi->fails()){
			return redirect("warga/$id_warga/editkk")
						-> withErrors($validasi)
						-> withInput();
		}

		$KepalaKeluarga->update($data);

		Session::flash('flash_message', 'Data User Berhasil di Update');

		return redirect('warga');

	}

	public function __construct(){
        $this->middleware('auth');
    }

}
