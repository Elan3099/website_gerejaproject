<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class notifController extends Controller
{
	public function index(){
		return view('create');
	}

	public function sukses(){
		Session::flash('sukses','Ini notifikasi SUKSES');
		return redirect('pesan');
	}

	public function peringatan(){
		Session::flash('peringatan','Ini notifikasi PERINGATAN');
		return redirect('pesan');
	}

	public function gagal1(){
		Session::flash('gagal','Ini notifikasi GAGAL');
		return redirect('pesan');
	}
}