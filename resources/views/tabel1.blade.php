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
<body>

	<div class="container">
		<div class="col-sm">
			<!- ir2 -->

			<div class="textup" style="font-family: 'Ramabhadra', sans-serif; color: black; font-size: 15px;">
				<b><p>Data Kehadiran Jemaat Gereja Kristen Jawa Salatiga <br> Ibadah Raya I</p></b>
				@foreach ($data1 as $dats) 

				<p style="font-size: 14px;">Hari/Tanggal : {{ $dats->hari}}, {{ $dats-> tgl }} <br> Waktu : {{ $dats-> waktu}}Jumlah Jemaat Hadir : {{ $count }} <br> </p>
				
				@endforeach
			</div>

			<table class="table table-light" style="width: auto; margin:auto;">
				<thead style="background-color: blue;">
					<tr>
						<th style="font-size: 12px;" >No.</th>
						<th style="font-size: 12px;">Kode</th>
						<th style="font-size: 12px;">Nama</th>
						<th style="font-size: 12px;"style="font-size: 8px;">Gender</th>
						<th style="font-size: 12px;">Alamat</th>
						<th style="font-size: 12px;">Email</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 0; ?>
					@foreach ($data as $dat)
					<?php $no++ ;?>
					<tr>
						<th style="font-size: 12px;">{{ $no }}</th>
						<th style="font-size: 12px;">{{ $dat->kode }}</th>
						<th style="font-size: 12px;">{{ $dat->nama }}</th>
						<th style="font-size: 12px;">{{ $dat->gender }}</th>
						<th style="font-size: 12px;">{{ $dat->alamat }}</th>
						<th style="font-size: 12px;">{{ $dat->email }}</th>
					</tr>
					@endforeach
				</tr>
			</tbody>
		</table>

	</div>
</div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>