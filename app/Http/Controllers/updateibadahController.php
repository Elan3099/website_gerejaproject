<?php

namespace App\Http\Controllers;
use App\Modeladmin;
use App\ibadah1;
use App\ibadah2;
use Illuminate\Http\Request;

use DB;


class updateibadahController extends Controller
{

	public function proses(Request $request){
		DB::insert('insert into kuota ( hari, tgl, waktu, kuota1, pelayan, hari1, tgl1, waktu1, kuota2, pelayan1 ) values ( ?, ?, ?, ?, ?,?, ?, ?, ?, ?)', [

			$request->input('hari'),
			$request->input('tgl'),
			$request->input('waktu'),
			$request->input('kuota1'),
			$request->input('pelayan'),

			$request->input('hari1'),
			$request->input('tgl1'),
			$request->input('waktu1'),
			$request->input('kuota2'),
			$request->input('pelayan1')
		]);

		return redirect('buat')->with('alert-success','Berhasil Input Data');

	}

	public function proses2(Request $request){

		
		DB::insert('insert into kuota2 ( hari, tgl, waktu, kuota1, pelayan ) values ( ?, ?, ?, ?, ?)', [

			$request->input('hari'),
			$request->input('tgl'),
			$request->input('waktu'),
			$request->input('kuota1'),
			$request->input('pelayan')
		]);

	}


	public function prosesinput1(Request $request){

		$users = DB::table('kuota')
		->select('kuota1')
		->first();

		$count_user = '';

		foreach ($users as $key => $val) {
			$count_user = $val;
		}

		// $users = $query->addSelect('kuota1')->first();



		$count = ibadah1::count();

		if($count < $count_user){ 

			DB::insert('insert into ibadah1( kode, nama, gender, alamat, email, tgl, waktu ) values ( ?,  ?, ?, ?, ?, ?, ?)', [

				$request->input('kode'),
				$request->input('nama'),
				$request->input('gender'),
				$request->input('alamat'),
				$request->input('email'),

				$request->input('tgl'),
				$request->input('waktu'),			

			]);

			return redirect()->action('UserController@berhasil');

		}elseif ($count >= $count_user) {

			return redirect('gagal');

		}
	}



	public function prosesinput2(Request $request){

		$users = DB::table('kuota')
		->select('kuota2')
		->first();

		$count_user = '';

		foreach ($users as $key => $val) {
			$count_user = $val;
		}

		// $users = $query->addSelect('kuota1')->first();



		$count = ibadah2::count();

		if($count < $count_user){ 



			DB::insert('insert into ibadah2( kode, nama, gender, alamat, email, tgl, waktu ) values ( ?,  ?, ?, ?, ?, ?, ?)', [

				$request->input('kode'),
				$request->input('nama'),
				$request->input('gender'),
				$request->input('alamat'),
				$request->input('email'),

				$request->input('tgl'),
				$request->input('waktu'),			

			]);

			return redirect()->action('UserController@berhasil2');

		}elseif ($count >= $count_user) {

			return redirect('gagal');

		}
	}


	public function tbl(){
		$data3 = DB::table('ibadah1')->where('id', \DB::raw("(select max(`id`) from ibadah1)"))->get();

		$data4 = DB::table('ibadah2')->where('id', \DB::raw("(select max(`id`) from ibadah2)"))->get();

		$data = \App\ibadah1::all(); 

		$data2 = \App\ibadah2::all(); 

		return view ('table_up', ['data' => $data, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);


	}

}
