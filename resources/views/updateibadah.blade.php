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
<body>



  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar_color" style="background-color: #113f67">
    <a class="navbar-brand" href="#">  <img src="foto/gkj.png" height="40px" width="45px" style="padding-right: 5px;">Gereja Kristen Jawa Salatiga</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <div class="navbar-nav ml-auto">
       <a class="nav-link active" href="{{ url('/gereja') }}">Beranda <span class="sr-only">(current)</span></a>
       <a class="nav-link" href="#">Profil</a>
       <a class="nav-link " href="#" >Kontak Kami</a>
       <a class="btn btn-primary tombol" href="#">Registrasi</a>
     </div>
   </div>
 </div>
</nav>
<!-- ISI -->

<div class="container">
  <div class="bungkus1">
    <h5>IBADAH RAYA UPDATE</h5>
  </div>
</div>

<div class="container">

  <!-- info -->
  <div class="row justify-content-center">
    <div class="col-lg-8 info-panel2">
      <div class="row">

        <div class="col-lg">
          <div class="imgpadtop2 img-fluid">
            <div class="img " >
              <a href=""data-toggle="modal" data-target="#exampleModal1"><img src="foto/create.png" alt="" height="100px" width="100px" style="display: block; margin: auto;" > <br> 
              </div>
              <div class="tulisan4">
                <h6>IBADAH RAYA I</h6></div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg">
          <div class="imgpadtop2 img-fluid">
           <a href=""data-toggle="modal" data-target="#exampleModal2"><img src="foto/create.png" alt="" height="100px" width="100px" style="display: block; margin: auto;" > <br> 
           </div>
           <div class="tulisan4">
            <h6>IBADAH RAYA II</h6></div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
</div>

<!-- tombol 1-->

<div class="container">
  <!-- info -->
  <div class="row justify-content-center">
    <div class="col-lg-8 info-panel3">
      <div class="row">

      </div>
    </div>
  </div>

  <br>
  <br>

  <!-- modal 1 -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #add8e6">
          <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">IBADAH RAYA I</h5>
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


  <!-- modal 2 -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #add8e6">
          <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">IBADAH RAYA II</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background-color: #f2f8fb">

          <!-- form Input  -->

          <form action="{{ url('/ibadahraya2') }}" method="post" >
            {{ csrf_field() }}


            <div class="form-group">
              <label for="inputhari">Hari</label>
              <input type="text" class="form-control"  name="hari" >
            </div>

            <div class="form-group">
              <label for="inputtanggal">Tanggal</label>
              <input type="date" name="tgl">
            </div>

            <div class="form-group">
              <label for="inputwaktu">Waktu</label>
              <input type="text" class="form-control"  name="waktu" >
            </div>

            <div class="form-group">
              <label for="inputkuota">Kuota</label>
              <input type="number" class="form-control"  name="kuota1" >
            </div>

            <div class="form-group">
              <label for="inputnama">Pelayan Khotbah</label>
              <input type="text" class="form-control"  name="pelayan" >
            </div>



            <button type="submit" class="btn btn-primary">Simpan</button>


            <!-- end Form Input  -->

          </div>
          <div class="modal-footer" style="background-color: #add8e6">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

          </div>
        </div>
      </div>
    </div>




    <br><br><br><br><br>

    <!-- FOOTER -->

    <footer class="page-footer font-small blue-grey lighten-5" style="background-color:#f8f8f8">

      <!-- Copyright -->
      <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
        <a class="dark-grey-text" href="https://mdbootstrap.com/"> GKJ Salatiga</a>
      </div>
      <!-- Copyright -->

    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
  </html>