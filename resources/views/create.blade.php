<!DOCTYPE html>
<html>
<head>
	<title>GKJ Salatiga</title>
	<!-- Boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- End Boostrap -->

  <!-- Google fonts -->

  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

  <!-- End Google Fonts -->

  <!-- CSS -->

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- end CSS -->


</head>
<body style="background-color: #222831">



  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar_color" style="background-color: #113f67">
    <a class="navbar-brand" href="#">  <img src="foto/gkj.png" height="40px" width="45px" style="padding-right: 5px;">Gereja Kristen Jawa Salatiga</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

          <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Admin, {{Session::get('name')}}
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item" href="{{ url('/') }}">Dashboard</a>
              <a class="dropdown-item" href="">Keluar</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- ISI -->


<div class="container">
  <div class="bungkus1">
    <div class="textx" style="font-family: 'Ramabhadra', sans-serif;">
      <h3>IMPUT DATA</h3>
      
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm" >


        <div class="col-lg"> 
          <div class="container" style="background-color: #eeeeee; border-radius: 10px; ">
            <div class="imgpadtop2 img-fluid">
              <a href="{{ url('/updateibadah') }}" style="color: #000000" data-toggle="modal" data-target="#staticBackdrop">
                <div class="img "  style=" margin-right: 20px;">
                  <img src="foto/book.svg" alt="" height="200px" width="200px" style="display: block; margin: auto;" > 
                  <div class="tulisan4"  style="color: white; background-color: #1d3557">
                    <h6>LIHAT DATA IBADAH</h6></div>
                  </a>


                </div>
              </div>
            </div>





          </div>

          <div class="col-lg"> 
            <div class="container" style="background-color: #eeeeee; border-radius: 10px; ">
              <div class="imgpadtop2 img-fluid">
                <a href="{{ url('/buat') }}" style="color: #000000" data-toggle="modal" data-target="#exampleModal1">
                  <div class="img "  style=" margin-right: 20px;">
                    <img src="foto/write.svg" alt="" height="200px" width="200px" style="display: block; margin: auto;" > 
                    <div class="tulisan4"  style="color: white; background-color: #1d3557">
                      <h6>BUAT DATA IBADAH</h6></div>
                    </a>


                  </div>
                </div>
              </div>
              <br><br>

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

            </a>
          </div>
        </div>
      </div>
    </a>
  </div>



  <!-- modal 1 -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #add8e6">
          <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">BUAT DATA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background-color: #f2f8fb">

          <!-- form Input  -->


          <form action="{{ url('/ibadahraya1') }}" method="post" >
            {{ csrf_field() }}


            <h5>Ibadah Raya I</h5>
            <br>
            <div class="form-group">
              <label for="inputhari">Hari</label>
              <input type="text" class="form-control"  name="hari" value="-" >
            </div>

            <div class="form-group">
              <label for="inputtanggal">Tanggal</label>
              <input type="date" name="tgl" value="2020-07-22">
            </div>

            <div class="form-group">
              <label for="inputwaktu">Waktu</label>
              <input type="text" class="form-control"  name="waktu" value="-" >
            </div>

            <div class="form-group">
              <label for="inputkuota">Kuota</label>
              <input type="number" class="form-control"  name="kuota1"  value="0">
            </div>

            <div class="form-group">
              <label for="inputnama">Pelayan Khotbah</label>
              <input type="text" class="form-control"  name="pelayan" value="-" >
            </div>

            <!-- 2 -->
            <h5>Ibadah Raya II</h5>
            <br>

            <div class="form-group">
              <label for="inputhari">Hari</label>
              <input type="text" class="form-control"  name="hari1" value="-" >
            </div>

            <div class="form-group">
              <label for="inputtanggal">Tanggal</label>
              <input type="date" name="tgl1" value="2020-07-22">
            </div>

            <div class="form-group">
              <label for="inputwaktu">Waktu</label>
              <input type="text" class="form-control"  name="waktu1" value="-">
            </div>

            <div class="form-group">
              <label for="inputkuota">Kuota</label>
              <input type="number" class="form-control"  name="kuota2" value="0" >
            </div>

            <div class="form-group">
              <label for="inputnama">Pelayan Khotbah</label>
              <input type="text" class="form-control"  name="pelayan1"  value="-">
            </div>

            <!-- 2 -->


            <button type="submit" class="btn btn-primary">Simpan</button>


          </form>
          <!-- end Form Input  -->

        </div>
        <div class="modal-footer" style="background-color: #add8e6">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

        </div>
      </div>
    </div>
  </div>




  <br><br><br><br><br>
  <!-- END MODAL 1 -->

  <!-- Modal2 -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="staticBackdropLabel">DATA IBADAH RAYA</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @foreach($data as $li)
          <p>IBADAH RAYA I</p>
          <br>
          <p>Hari/Tanggal   : {{ $li-> hari }}, {{ $li-> tgl }}</p>
          <p>Waktu          : {{ $li-> waktu}}</p>
          <p>Kuota          : {{ $li-> kuota1 }} Kursi</p>
          <p>Pelayan Firman : {{ $li-> pelayan }}</p>
          <br>
          <p>IBADAH RAYA II</p>
          <br>
          <p>Hari/Tanggal   : {{ $li-> hari1 }}, {{ $li-> tgl1 }}</p>
          <p>Waktu          : {{ $li-> waktu1 }}</p>
          <p>Kuota          : {{ $li-> kuota2 }} Kursi</p>
          <p>Pelayan Firman : {{ $li-> pelayan1 }}</p>

          @endforeach
        </div>
        <div class="modal-footer">
          @foreach($data as $li)
          <a href="/admin/hapus/{{ $li -> id }}">
           @endforeach
           <button type="button" class="btn btn-primary">Hapus</button>
         </a>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
       </div>
     </div>
   </div>
 </div>


 <!-- FOOTER -->

 <footer class="page-footer font-small blue-grey lighten-5" style="background-color:#f8f8f8">

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py">© 2020 Copyright:
    <a class="dark-grey-text" href="https://mdbootstrap.com/"> GKJ Salatiga</a>
  </div>
  <!-- Copyright -->

</footer>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>