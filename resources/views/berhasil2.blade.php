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
  <!-- info -->
  <div class="row justify-content-center padd">
    <div class="col-lg-4 info-panel4">
     <div class="row">
      <div class="col-lg">

        <img src="foto/emoji.png" height="70px" width="70px" style="display: block; margin: auto;"> 
        <div class="text1">
          <p>Regristrasi yang anda lakukan berhasil. <br><br><b> Berikut QRCode anda silahkan di Sreenshoot.</b></p>
        </div>
        <br>

        <!-- button  beranda -->

        <div class="container">
          <!-- info -->
          <div class="row justify-content-center">
           <div class="col-lg-12 info-panel5">
            <div class="row">
              <div class="col-lg">
               <div class="visible-print text-center" style="margin-bottom: 40px;">

                 @foreach($data_daftar as $li)
                 {!! QrCode::size(250)->generate($li->kode);!!}
                 <div class="text1">
                  <h5>{{$li->nama}} ({{$li->gender}})</h5></div>
                  @endforeach

                </div>
                <a href="{{ url('/userpilih') }}">
                  <button type="button" class="btn btn-info center-block tombol5"  style="display: block; margin: auto;">    Beranda  </button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<br><br><br><br><br>

<!-- FOOTER -->

<footer class="page-footer font-small blue-grey lighten-5" style="background-color:#f8f8f8">

  <div style="background-color: #87c0cd;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Terhubung dengan kami di jejaring sosial!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">KOTAK SARAN</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

        
        <form action="/register/ks" method="POST">

          <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <div class="form-group">
            <label for="inputname">Nama Lengkap</label>
            <input type="text" class="form-control" name="ks_nama">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="kotaksaran" rows="3">Saran</textarea>
          </div>
          
          <button type="submit" class="btn btn-primary" >Kirim</button>
          
        </form>

      </div>
      <!-- Grid column -->

      <div class=" mx-auto mb-4">


      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      	<!-- KONTAK -->

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">KONTAK</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home "><img src="foto/address.png" class="img-responsive" width="30px" height="30px"></i>&nbsp  Jl. P. Diponegoro No.55, Salatiga 50714</p>
          <p>
            <i class="fas fa-envelope"><img src="foto/mail.png" class="img-responsive" width="25px" height="25px"></i>&nbsp  salatiga@gkj.or.id</p>
            <p>
              <i class="fas fa-phone "><img src="foto/phone.png" class="img-responsive" width="25px" height="25px"></i>&nbsp 0298 326246</p>
              

            </div>
            <!-- Grid column -->

            <!-- SOSIAL MEDIA -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">

              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">SOSIAL MEDIA</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a href="https://www.facebook.com/gkj.salatigaselatan" title="Gkj Salatiga Salatiga"><img src="foto/facebook.png" class="img-responsive" width="30px" height="30px">&nbsp Facebook</a>
              </p>
              <p>
                <a href="https://www.instagram.com/gkjsalatiga/?hl=id" title="@gkjsalatiga"><img src="foto/ig.png" class="img-responsive" width="30px" height="30px">&nbsp Instagram</a>
              </p>
            </div>
            <!-- Grid column -->



          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

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