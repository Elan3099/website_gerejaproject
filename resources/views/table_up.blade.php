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

	<div class="row">
		<div class="col-sm">
			
			<div class="textup" style="font-family: 'Ramabhadra', sans-serif; color: white;">
				<b><p>Data Regristrasi Jemaat IR I</p></b>
				@foreach ($data3 as $da) 
				<br>
				<p>Tanggal : {{ $da-> tgl }}</p>
				<p>Waktu : {{ $da-> waktu }}</p>
				@endforeach
				<br></div>

				<div class="row">
					<table class="table" style="margin-bottom: 100px; background-color: #eeeeee; text-align: center;">
						<thead class="thead" style="background-color:#a8d8ea;">
							<tr>
								<th scope="col" class="column-primary" data-header ="Jemaat"><span> No. </span> </th>
								<th scope="col">Kode  Unik </th>
								<th scope="col">Nama Lengkap </th>
								<th scope="col">Gender</th>
								<th scope="col">Alamat </th>
								<th scope="col">Email </th>
								<th scope="col" class="column-primary">Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0;?>
							@foreach ($data as $d) 
							<?php $no++ ;?>
							<tr>
								<td data-header="No.">{{ $no }}</td>
								<td data-header="Kode">{{ $d -> kode }}</td>
								<td data-header="Nama" class="title">{{ $d -> nama }}</td>
								<td data-header="gender">{{ $d -> gender }}</td>
								<td data-header="alamat">{{ $d -> alamat }}</td>
								<td data-header="Email">{{ $d -> email }}</td>
								<th scope="row">
									<div class="toolbox">
										<button type="button" class="btn" style="background-color: #0d7377; width: 100px; height: 40px;">EDIT</button>
										<a href="/admin/hapustable/{{ $d -> id }}">
											<button type="button" class="btn" style="background-color: #e84545;width: 100px; height: 40px;">HAPUS</button></a>

										</div>
									</tr>
								</tbody>
								@endforeach
							</table>
						</div>

						<!-- ir2 -->

						<div class="textup" style="font-family: 'Ramabhadra', sans-serif; color: white;">
							<b><p>Data Regristrasi Jemaat IR II</p></b>
							@foreach ($data4 as $dats) 
							<br>
							<p>Tanggal : {{ $dats-> tgl }}</p>
							<p>Waktu : {{ $dats-> waktu}}</p>
							@endforeach
							<br></div>

							<div class="row">
								<table class="table" style="margin-bottom: 100px; background-color: #eeeeee; text-align: center;">
									<thead class="thead" style="background-color:#a8d8ea;">
										<tr>
											<th scope="col" class="column-primary" data-header ="Jemaat"><span> No. </span> </th>
											<th scope="col">Kode  Unik </th>
											<th scope="col">Nama Lengkap </th>
											<th scope="col">Gender</th>
											<th scope="col">Alamat </th>
											<th scope="col">Email </th>
											<th scope="col" class="column-primary">Opsi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 0;?>
										@foreach ($data2 as $dat) 
										<?php $no++ ;?>
										<tr>
											<td data-header="No.">{{ $no }}</td>
											<td data-header="Kode">{{ $dat -> kode }}</td>
											<td data-header="Nama" class="title">{{ $dat -> nama }}</td>
											<td data-header="gender">{{ $dat -> gender }}</td>
											<td data-header="alamat">{{ $dat -> alamat }}</td>
											<td data-header="Email">{{ $dat -> email }}</td>
											<th scope="row">
												<div class="toolbox">
													<button type="button" class="btn" style="background-color: #0d7377; width: 100px; height: 40px;">EDIT</button>
													<a href="/admin/hapustable2/{{ $dat -> id }}">
														<button type="button" class="btn" style="background-color: #e84545;width: 100px; height: 40px;">HAPUS</button></a>
													</div>
												</tr>
											</tbody>
											@endforeach
										</table>
									</div>

								</div>



							</div>
						</div>
					</div>



					<!-- FOOTER -->

					<footer class="page-footer font-small blue-grey lighten-5" style="background-color:#f8f8f8">

						<!-- Copyright -->
						<div class="footer-copyright text-center text-black-50 ">© 2020 Copyright:
							<a class="dark-grey-text" href="https://mdbootstrap.com/"> GKJ Salatiga</a>
						</div>
						<!-- Copyright -->

					</footer>



					<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
				</body>
				</html>