<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Session;
use App\Kelurahan;

class UserController extends Controller
{
    //

	protected function index(){
		$user_list = User::all();
		return view('user.index', compact('user_list'));
	}

	protected function create(){
		$list_kelurahan = Kelurahan::lists('kelurahan', 'id_kelurahan');
		return view ('user.create', compact('list_kelurahan'));
	}

	public function store(Request $request){
		$data = $request->all();

		$validasi = Validator::make($data, [
			'name'		=> 'required|max:255',
			'username'	=> 'required|max:50|unique:users',
			'password'	=> 'required|confirmed|min:6',
			'level'		=> 'required',
			'id_kelurahan' => 'required'
		]);

		if($validasi->fails()){
			return redirect('user/create')
						->withInput()
						->witherrors($validasi);
		}

		// Hash Password
		$data['password'] = bcrypt($data['password']);

		User::create($data);

		Session::flash('flash_message', 'Data user berhasil disimpan.');
		return redirect('user');
	}

	public function show($id){
		return redirect('user');
	}

	public function edit($id){
		$user = User::findOrFail($id);
		$list_kelurahan = Kelurahan::lists('kelurahan', 'id_kelurahan');
		return view('user.edit', compact('user', 'list_kelurahan'));
	}

	public function update($id, Request $request){
		$user = User::findOrFail($id);
		$data = $request->all();

		$validasi = Validator::make($data, [
			'name'		=> 'required|max:255',
			'username'	=> 'required|max:50|unique:users',
			'password'	=> 'sometimes|confirmed|min:6',
			'level'		=> 'required',
			'id_kelurahan' => 'required'
		]);

		if($validasi->fails()){
			return redirect("user/$id/edit")
						-> withErrors($validasi)
						-> withInput();
		}

		if($request->has('password')){
			//Hash Password
			$data['password'] = bcrypt($data['password']);
		}
		else{
			// Hapus password tidak di update
			$data = array_except($data, ['password']);
		}

		$user->update($data);
		Session::flash('flash_message', 'Data User Berhasil di Update');

		return redirect('user');
	}

	protected function destroy($id){
		$user = User::findOrFail($id);
		$user->delete();
		Session::flash('flash_message', 'Data user berhasil di hapus');
		Session::flash('penting', true);
		return redirect('user');
	}

	public function __construct(){
		$this->middleware('auth');
		$this->middleware('admin');
	}

}
	