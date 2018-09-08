<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Kelurahan;

use Session;

use Validator;

class KelurahanController extends Controller
{
    //
    public function index(){
    	$kelurahan_list = Kelurahan::all();
    	return view ('kelurahan.index', compact('kelurahan_list'));
    }

    public function simpan(Request $request){
    	// Kelurahan::create($request->all());
     //    Session::flash('flash_message', 'Data Kelurahan Berhasil Disimpan');
    	// return redirect('kelurahan');

        $data = $request->all();

        $validasi = Validator::make($data, [
            'id_user',
            'kelurahan'      => 'required|max:255'
        ]);

        if($validasi->fails()){
            return redirect('kelurahan')
                        ->withInput()
                        ->withErrors($validasi);
        }

        Kelurahan::create($data);

        Session::flash('flash_message', 'Data Kelurahan berhasil disimpan.');
        return redirect('kelurahan');
    }

    public function edit($id_kelurahan){
        $kelurahan_list = Kelurahan::all();
        $kelurahan = Kelurahan::findOrFail($id_kelurahan);
        return view ('kelurahan/edit', compact('kelurahan', 'kelurahan_list'));
    }

    public function update($id_kelurahan, Request $request){
        $kelurahan = Kelurahan::findOrFail($id_kelurahan);
        $kelurahan->update($request->all());
        return redirect('kelurahan');
    }

    public function __construct(){
        $this->middleware('auth');
    }
}
