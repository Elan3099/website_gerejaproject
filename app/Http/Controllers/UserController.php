<?php
namespace App\Http\Controllers;
use App\ModelUser;
use App\ibadah1;
use App\ibadah2;
use DB;
use App\absensi;
use App\absensi2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
	public function index(){
		if(!Session::get('login')){
			return redirect('login')->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
			return view('index');
		}
	}

	public function login(){
		return view('login');
	}

    public function user(){
        return view('user');
    }

    public function check(){

    // mengambil data dari table pegawai
        $data = DB::table('ibadah1')->paginate(2);

            // mengirim data pegawai ke view index
        return view('check',['data' => $data]);

    }

    public function check2(){

    // mengambil data dari table pegawai
        $da = DB::table('ibadah2')->paginate(5);

            // mengirim data pegawai ke view index
        return view('check2',['da' => $da]);

    }


    public function cari(Request $request) {

            // menangkap data pencarian
        $cari = $request->cari;

            // mengambil data dari table pegawai sesuai pencarian data
        $data = DB::table('ibadah1')
        ->where('kode','like',"%".$cari."%")
        ->paginate();

            // mengirim data pegawai ke view index
        return view('check',['data' => $data]);

    }

    public function cari2(Request $request) {

            // menangkap data pencarian
        $cari = $request->cari;

            // mengambil data dari table pegawai sesuai pencarian data
        $da = DB::table('ibadah2')
        ->where('kode','like',"%".$cari."%")
        ->paginate();

            // mengirim data pegawai ke view index
        return view('check2',['da' => $da]);

    }


    public function absen($id, Request $request) {

        $d = DB::table('ibadah1')->where('id',$id)->first();

        $kode = $d->kode;
        $nama = $d->nama;
        $gender = $d->gender;
        $alamat = $d->alamat;
        $email = $d->email;

        DB::table('absensi1')->insert([

            ['kode' => $kode, 'nama' => $nama, 'gender' => $gender, 'alamat' => $alamat,  'email' => $email  ]

            
        ]);
    }

    public function absensi2($id, Request $request) {

        $g = DB::table('ibadah2')->where('id',$id)->first();

        $kode = $g->kode;
        $nama = $g->nama;
        $gender = $g->gender;
        $alamat = $g->alamat;
        $email = $g->email;

        DB::table('absensi1')->insert([

            ['kode' => $kode, 'nama' => $nama, 'gender' => $gender, 'alamat' => $alamat,  'email' => $email  ]


        ]);

        return redirect('check2')->with('alert-success','Data Berhasil Terinput');
    }


    public function berhasil(){

     $data_daftar = DB::table('ibadah1')->where('id', \DB::raw("(select max(`id`) from ibadah1)"))->get();

     return view ('berhasil', ['data_daftar' => $data_daftar]);

 }

 public function berhasil2(){

     $data_daftar = DB::table('ibadah2')->where('id', \DB::raw("(select max(`id`) from ibadah2)"))->get();

     return view ('berhasil2', ['data_daftar' => $data_daftar]);

 }

 public function gagal(){
    return view('gagal');
}

public function hadir(){
    return view('kehadiran');
}


public function loginuser(){
    return view('indexuser');
}

public function daftaribadah(){
    $data_daftar = \App\Modeladmin::all(); 
    $users = DB::table('kuota')
    ->select('kuota1')
    ->first();

    $count_user = '';

    foreach ($users as $key => $val) {
        $count_user = $val;
    }

    $count = ibadah1::count();

    $jumlah = $count_user - $count;


    return view ('daftaribadah', ['data_daftar' => $data_daftar, 'jumlah' => $jumlah]);

}

public function daftaribadah2(){
   $data_daftar = \App\Modeladmin::all(); 
   $users = DB::table('kuota')
   ->select('kuota2')
   ->first();

   $count_user = '';

   foreach ($users as $key => $val) {
    $count_user = $val;
}

$count = ibadah2::count();

$jumlah = $count_user - $count;


return view ('daftaribadah2', ['data_daftar' => $data_daftar, 'jumlah' => $jumlah]);






}



public function userpilih(){

    $data_daftar = \App\Modeladmin::all(); 
        //values ini data yang di ambil dari database all()
        // app/daftar adalah dari model

    return view ('userpilih', ['data_daftar' => $data_daftar]);
}


public function buat(){
    $data = \App\Modeladmin::all(); 

    return view ('create', ['data' => $data]);
}

public function kehadiran1(){
    $data = \App\absensi::all();
    $data1 = \App\Modeladmin::all();

    $count =count($data);


    return view ('kehadiran1', ['data' => $data, 'data1' => $data1, 'count' => $count]);
}

public function kehadiran2(){
    $data = \App\absensi2::all();
    $data1 = \App\Modeladmin::all();

    $count =count($data);


    return view ('kehadiran2', ['data' => $data, 'data1' => $data1, 'count' => $count]);
}




public function tabel1(){
   $data = \App\absensi::all();
   $data1 = \App\Modeladmin::all();

   $count =count($data);


   return view ('tabel1', ['data' => $data, 'data1' => $data1, 'count' => $count]);
}


public function table2(){
   $data = \App\absensi2::all();
   $data1 = \App\Modeladmin::all();

   $count =count($data);


   return view ('tabel2', ['data' => $data, 'data1' => $data1, 'count' => $count]);
}


public function table(){
    return view('table');
}



public function hapus($id)
{

    DB::table('kuota')->where('id',$id)->delete();


    return redirect('/buat');
}

public function hapustable($id)
{

    DB::table('ibadah1')->where('id',$id)->delete();


    return redirect('/table_up');
}

public function hapustable2($id)
{

    DB::table('ibadah2')->where('id',$id)->delete();


    return redirect('/table_up');
}


public function upp(){
    return view('updateibadah');
}

public function menu_dokumen(){
    return view('menu_dokumen');
}



public function loginPost(Request $request){
  $email = $request->email;
  $password = $request->password;
  $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
        	if(Hash::check($password,$data->password)){
        		Session::put('name',$data->name);
        		Session::put('email',$data->email);
        		Session::put('login',TRUE);
        		return redirect('/');
        	}
        	else{
        		return redirect('login')->with('alert','Email atau Password anda salah!');
        	}
        }
        else{
        	return redirect('login')->with('alert','Email atau Password anda salah!');
        }
    }
    public function logout(){
    	Session::flush();
    	return redirect('login')->with('alert','Anda telah logout');
    }
    public function register(Request $request){
    	return view('register');
    }
    public function registerPost(Request $request){
    	$this->validate($request, [
    		'name' => 'required|min:4',
    		'email' => 'required|min:4|email|unique:users',
    		'password' => 'required',
    		'confirmation' => 'required|same:password',
    	]);
    	$data =  new ModelUser();
    	$data->name = $request->name;
        $data->ttl = $request->ttl;
        $data->jabatan = $request->jabatan;
        $data->telp = $request->telp;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Anda berhasil register');
    }








}