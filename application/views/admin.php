<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>

	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animated.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body class="admin">
	<nav class="navbar-custom">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="asia" class="navbar-brand" id="brand">Asia</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#member">Daftar Member</a></li>
					<li><a href="#penggunaan_kartu">Penggunaan Kartu</a></li>
				</ul>
				<button type="button" class="close-toggle" data-toggle="collapse" data-target="#myNavbar">X</button>
			</div>
		</div>
	</nav>
	<div id="member">
		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert animated bounceInDown">
				<span>Sukses!</span>
				<?php echo $this->session->flashdata('success') ?>
			</div>
		<?php endif ?>
		<table class="table-custom">
			<thead id="thead">
				<tr>
					<th colspan="3">Nama</th>
					<th>Tanggal Lahir</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>Nomor Ktp</th>
					<th>Nomor Hp</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($member as $key => $value): ?>
					<tr>
						<td colspan="3"><?=$value->Nama?></td>
						<td><?=$value->Tgl_Lahir?></td>
						<td><?=$value->Alamat?></td>
						<td><?=$value->Jenis_Kelamin?></td>
						<td><?=$value->no_ktp?></td>
						<td><?=$value->No_Hp?></td>
						<td>
							<button data-toggle="modal" data-target="#<?php echo $value->id_member ?>">
								<i class="fa fa-trash"></i>
							</button>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	
	<?php foreach ($member as $key => $value): ?>
		<div id="<?php echo $value->id_member ?>" class="modal fade animated bounceInUp" role="dialog">
			<div class="modal-dialog">
				<img src="assets/img/warning.png" alt="">
				<h2>Apakah anda yakin?</h2>
				<p>Data <?php echo $value->Nama ?> akan dihapus!</p>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<a href="<?=base_url('admin/hapus/'.$value->id_member)?>" class="btn btn-danger">
					Ya ,hapus!
				</a>
			</div>
		</div>
	<?php endforeach ?>	

	<div class="footer">
		&copy;2017 - Made with <i class="fa fa-coffee"></i> by Yeppy Mangun P
	</div>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/scroll.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function (){
			setTimeout(function(){
				$('.alert').fadeOut();
			},4000);

			$('#member').niceScroll();
		});
	</script>
</body>
</html>