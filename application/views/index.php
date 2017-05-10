<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" width="device-width, inital-scale=1.0">

	<title>Asia</title>

	<link rel="stylesheet" type="text/css" href="assets/css/reset.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animated.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
	<nav class="navbar-custom">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" id="brand">Asia</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a id="beranda">Beranda</a></li>
					<li><a href="#buat_kartu" id="buat-kartu">Buat Kartu</a></li>
					<li><a href="#penggunaan_kartu" id="penggunaan-kartu">Penggunaan Kartu</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="">Bantuan</a></li>
					<li><a href="">Tentang</a></li>
				</ul>
				<button type="button" class="close-toggle" data-toggle="collapse" data-target="#myNavbar">X</button>
			</div>
		</div>
	</nav>
	
	<div class="page container">
		<!-- load with jQuery -->
	</div>

	<div class="footer">
		&copy;2017 - Made with <i class="fa fa-coffee"></i> by Yeppy Mangun P
	</div>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.page').load('assets/content/loading.html');
			setTimeout(function() {
				$('.page').load('assets/content/beranda.html');
			}, 2000);
			$('#beranda, #brand').click(function(){
				$('.page').load('assets/content/beranda.html');
			});

			$('#buat-kartu').click(function(){
				$('.page').load('assets/content/loading.html');
				setTimeout(function(){
					$('.page').load('assets/content/buat-kartu.html');
				}, 1000);
				$(this).click(function(){
					$('.page').load('assets/content/buat-kartu.html');
				});
			});

			$('#penggunaan-kartu').click(function(){
				$('.page').load('assets/content/loading.html');
				setTimeout(function(){
					$('.page').load('assets/content/penggunaan-kartu.html');
				},1000);
				$(this).click(function(){
					$('.page').load('assets/content/penggunaan-kartu.html');
				});
			});
		});
	</script>
</body>
</html>