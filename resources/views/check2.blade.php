<!DOCTYPE html>
<html>
<head>
	<title>GKJ Salatiga</title>
	<!-- Boostrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- End Boostrap -->

	<!-- Google fonts -->

	<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Ramabhadra&display=swap" rel="stylesheet">
	<!-- End Google Fonts -->

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
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


<div class="container" style="margin-top: 50px;">
	
	<div class="textup" style="font-family: 'Ramabhadra', sans-serif; color: white;">
		<b><p>DATA REGRISTRASI JEMAAT IBADAH RAYA II</p></b>

		<br></div>

		


		<div class="row">

			<form action="/cari2" method="GET" style="margin-bottom: 20px;">
				<input type="text" name="cari" placeholder="Cari Kode .." value="{{ old('cari2') }}">
				<input type="submit" value="CARI">
			</form>

			<table class="table " style="margin-bottom: 100px; background-color: #eeeeee; text-align: center;">
				<thead class="thead" style="background-color:#a8d8ea;">
					<tr>
						<th scope="col" class="column-primary" data-header ="Jemaat"><span> No. </span> </th>
						<th scope="col">KODE </th>
						<th scope="col">NAMA LENGKAP </th>
						<th scope="col">GENDER</th>
						<th scope="col">ALAMAT </th>
						<th scope="col">EMAIL </th>
						<th scope="col">TANGGAL</th>
						<th scope="col">WAKTU</th>
						<th scope="col" class="column-primary">OPSI</th>

					</tr>
				</thead>
				<tbody>
					<?php $no = 0;?>
					@foreach ($da as $h) 
					<?php $no++ ;?>
					<tr>
						<td data-header="No.">{{ $no }}</td>
						<td data-header="Kode">{{ $h -> kode }}</td>
						<td data-header="Nama" class="title">{{ $h -> nama }}</td>
						<td td data-header="Gender"> {{ $h -> gender }}</td>
						<td td data-header="Alamat">{{ $h -> alamat }}</td>
						<td td data-header="Email">{{ $h -> email }}</td>
						<td td data-header="Tanggal">{{ $h -> tgl }}</td>
						<td td data-header="Waktu">{{ $h -> waktu }}</td>
						<th scope="row">
							<div class="toolbox">
								<a href="absensi2/{{$h->id}}" type="button"  class="btn btn-primary" >HADIR</a>
							</div>
						</th>

					</tr>
				</tbody>
				@endforeach
			</table>

			<div class="container" style="margin-bottom: 100px;">
				<!-- info -->
				<div class="row justify-content-center">
					<div class="col-lg-12 ">
						<div class="row">
							<div class="col-lg">
								<a href="/pdf">
									<button type="button" class="btn btn-info center-block tombol5"  style="display: block; margin: auto;">   DOWNLOAD PDF </button></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				@if(\Session::has('alert'))
				<div class="alert alert-danger" style="text-align: center; width: auto; margin:auto;">
					<div>{{Session::get('alert')}}</div>
				</div>
				@endif
				@if(\Session::has('alert-success'))
				<div class="alert alert-success" style="text-align: center; width: auto; margin:auto;">
					<div>{{Session::get('alert-success')}}</div>
				</div>
				@endif

				@if ($errors->any())
				<div class="alert alert-danger" style="text-align: center; width: auto; margin:auto;">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
			</div>
		</div>


		<br><br><br><br>
		<br><br>
		<!-- ir2 -->




		<!-- FOOTER -->

		<footer class="page-footer font-small blue-grey lighten-5" style="background-color:#f8f8f8">

			<!-- Copyright -->
			<div class="footer-copyright text-center text-black-50 ">© 2020 Copyright:
				<a class="dark-grey-text" href="https://mdbootstrap.com/"> GKJ Salatiga</a>
			</div>
			<!-- Copyright -->

		</footer>
		<!-- Copyright -->

	</footer>

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

<script>
	$(document).ready( function () {
		$('#table_id').DataTable();
	} );
</script>
</html>