<!DOCTYPE html>
<html>
<head>
	<title>GKJ Salatiga</title>
	<!-- Boostrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- End Boostrap -->

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Ramabhadra&display=swap" rel="stylesheet">
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
							<a class="dropdown-item" href="{{ url('/loginuser') }}">User</a>
							<a class="dropdown-item" href="{{ url('/logout') }}">Keluar</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>



<!-- GAMBAR 2 -->

<div class="container">
	<div class="bungkus1">
		<div class="textx" style="font-family: 'Ramabhadra', sans-serif;">
			<h3>DATABASE WEBSITE GEREJA KRISTEN JAWA SALATIGA</h3>
			<p>Selamat Datang Admin, {{Session::get('name')}}</p></div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm" >

				<div class="container" style="background-color: #eeeeee; border-radius: 10px; ">
					<div class="imgpadtop2 img-fluid">
						<div class="img " style=" margin-right: 20px;">
							<a href="{{ url('/m_dokumen') }}"><img src="foto/document.svg" alt="" height="200px" width="200px" style="display: block; margin: auto;  " > <br> 
								<div class="tulisan4 " >
									<h6>DOKUMEN</h6>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-sm">
					<div class="container" style="background-color: #eeeeee; border-radius: 10px; ">
						<div class="imgpadtop2 img-fluid">
							<div class="img "  style=" margin-right: 20px;">
								<a href="{{ url('/buat') }}"><img src="foto/input.svg" alt="" height="200px" width="200px" style="display: block; margin: auto;" > <br> 
									<div class="tulisan4"  style="color: white; background-color: #1d3557">
										<h6>INPUT DATA</h6></div>
									</div>
								</div>

							</div>


						</div>
					</div>
				</a>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-sm" >

						<div class="container" style="background-color:#eeeeee; border-radius: 10px; ">
							<div class="imgpadtop2 img-fluid">
								<div class="img " style=" margin-right: 20px;">
									<a href="{{ url('/table') }}"><img src="foto/scanner.svg" alt="" height="200px" width="200px" style="display: block; margin: auto;  " ><br> 
										<div class="tulisan4 " style="color: white; background-color: #1d3557">
											<h6>CHECK QRCODE</h6>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="col-sm">
							<div class="container" style="background-color: #eeeeee; border-radius: 10px; ">
								<div class="imgpadtop2 img-fluid">
									<div class="img "  style=" margin-right: 20px;">
										<a href="{{ url('/buat') }}"><img src="foto/saran.svg" alt="" height="200px" width="200px" style="display: block; margin: auto;" > <br> 
											<div class="tulisan4"  style="color: white; background-color: #1d3557">
												<h6>KOTAK SARAN</h6></div>
											</div>
										</div>

									</div>


								</div>
							</div>
							<br><br><br><br><br><br>


						</div>
						<!-- FOOTER -->

						<footer class="page-footer font-small blue-grey lighten-5" style="background-color:#f8f8f8">



							<!-- Copyright -->
							<div class="footer-copyright text-center text-black-50 py-1">© 2020 Copyright:
								<a class="dark-grey-text" href="https://mdbootstrap.com/"> GKJ Salatiga</a>
							</div>
							<!-- Copyright -->

						</footer>
						<!-- Footer -->

						<!-- END -->



						<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
						<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
					</body>
					</html>


