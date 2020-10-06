@extends('templates/base2')
@section('title','Login')
@section('container')
<div class="limiter">
    <div class="container-login100" style="background-image: url({{asset ('Login_v16/images/gereja.jpg')}});">

        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-35">
                WEBSITE GEREJA KRISTEN JAWA SALATIGA
            </span>

            <span class="login100-form-title1 p-b-25">
                LOGIN ADMIN 
            </span>



            <form class="login100-form validate-form p-b-33 p-t-5"  action="{{ url('/loginPost') }}" method="post">

                {{ csrf_field() }}

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100"  name="email" placeholder="Email"
                    id="email" type="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus>

                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>


                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn">
                        Login
                    </button>

                </div>
                <div class="text1"> 
                    <p>Belum punya akun?
                        <a href="" style="color: #6fbbd3;"  data-toggle="modal" data-target="#exampleModal"> Daftar</a> Sekarang!</p>
                    </div>
                    @if(\Session::has('alert'))
                    <div class="alert alert-danger" style="text-align: center;">
                        <div>{{Session::get('alert')}}</div>
                    </div>
                    @endif
                    @if(\Session::has('alert-success'))
                    <div class="alert alert-success" style="text-align: center;">
                        <div>{{Session::get('alert-success')}}</div>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger" style="text-align: center;">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </form>

            </form>


        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #add8e6">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRASI ADMIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: #f2f8fb">

                <!-- form Input  -->

                <form action="{{ url('/registerPost') }}" method="post" >
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="inputnama">Nama Lengkap</label>
                        <input type="text" class="form-control"  name="name" >
                    </div>

                    <div class="form-group">
                        <label for="inputnama">Jabatan</label>
                        <input type="text" class="form-control"  name="jabatan" >
                    </div>

                    <div class="form-group">
                        <label for="inputnama">Tempat, Tanggal Lahir</label>
                        <input type="text" class="form-control"  name="ttl" >
                    </div>

                    <div class="form-group">
                        <label for="inputnama">Alamat</label>
                        <input type="text" class="form-control"  name="alamat" >
                    </div>

                    <div class="form-group">
                        <label for="inputnama">No. Telp</label>
                        <input type="text" class="form-control"  name="telp" >
                    </div>

                    <div class="form-group">
                        <label for="inputnama">Email</label>
                        <input type="email" class="form-control"  name="email" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" class="form-control"  name="password">
                    </div>

                    <div class="form-group">
                        <label for="confirmation">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="confirmation" name="confirmation" placeholder="Password Confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Daftar</button>


                    <!-- end Form Input  -->

                </div>
                <div class="modal-footer" style="background-color: #add8e6">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

                </div>
            </div>
        </div>
    </div>

    @endsection