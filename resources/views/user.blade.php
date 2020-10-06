<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>
<body>

	<nav class="navbar navbar-expand-lg navbar navbar " style="background-color: #867647 ;opacity: 0.6;
	filter: alpha(opacity=60); /* For IE8 and earlier */;">
	<a class="navbar-brand" href="#">  <img src="foto/gkj.png" height="40px" width="45px" style="padding-right: 5px;">Gereja Kristen Jawa Salatiga</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav ml-auto">
			<a class="nav-link active" href="{{ url('/loginuser') }}">Beranda <span class="sr-only">(current)</span></a>
			<a class="nav-link" href="#">Profil</a>
			<a class="nav-link " href="#" >Kontak Kami</a>
			<a class="btn btn-primary tombol" href="{{ url('/userpilih') }}">Regisrasi</a>
		</div>
	</div>
</div>
</nav>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>