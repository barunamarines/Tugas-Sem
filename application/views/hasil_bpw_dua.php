<!DOCTYPE html>
<html>
<head>
	<title>Penerimaan</title>
	<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/css/bootstrap.min.css") ?>">
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
		<!-- Css -->
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
		<!-- font Awesome -->
		<link rel="stylesheet" href="<?php echo base_url ("assets/vendor/fontawesome-free-5.5.0-web/css/fontawesome.min.css") ?>">
</head>
<body>
	

	<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse container" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-light" href="<?php echo base_url(); ?>index.php/Bar_col/index"">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="<?php echo base_url(); ?>index.php/Bar_col/penerimaan">Penerimaan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="<?php echo base_url(); ?>index.php/Bar_col/hasil_bpw">Hasil BPW</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="<?php echo base_url(); ?>index.php/Bar_col/pengeluaran">Pengeluaran</a>
					</li>
				</ul>
			</div>
		</nav>


		<!-- Isi -->
		<h2 class="text-center py-3">Hasil BPW</h2>
		<div class="container text-center" style="width: 500px;">
		<form action="<?php echo base_url(); ?>index.php/Bar_col/memasukan_data" method="post">
		<table class="table" style="width: 500px;">
			<tr>
				<th>No</th>
				<th>No Id</th>
				<th>Kilogram</th>
			</tr>
			<?php 
			$no=1;
			for ($i=0; $i < $jumlah_cones; $i++) { 
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $no_id; ?><input type="hidden" name="no_id_awal" value="<?php echo $no_id ?>"><input type="text" class="form-control" name="no_id_isi[]" required></td>
					<td><input type="text" class="form-control" name="kilogram[]" value="<?php echo $kilogram ?>" required></td>
				</tr>
				<?php
			}
			 ?>
			 <tr>
			 	<td><button type="submit" class="btn btn-primary">Submit</button></td>
			 </tr>
			 <input type="hidden" name="tanggal_hasil" value="<?php echo $tanggal_hasil; ?>">
			 <input type="hidden" name="no_inisial_benang" value="<?php echo $no_inisial_benang; ?>">
			 <input type="hidden" name="jenis_benang" value="<?php echo $jenis_benang; ?>">
			 <input type="hidden" name="jenis_celup" value="<?php echo $jenis_celup; ?>">
			 <input type="hidden" name="no_mixing" value="<?php echo $no_mixing; ?>">
			 <input type="hidden" name="no_party" value="<?php echo $no_party; ?>">
			 <input type="hidden" name="shift" value="<?php echo $shift; ?>">
			 <input type="hidden" name="panjang_penarikan" value="<?php echo $panjang_penarikan; ?>">
			 <input type="hidden" name="no_id" value="<?php echo $no_id; ?>">
			 <input type="hidden" name="no_box" value="<?php echo $no_box; ?>">
			 <input type="hidden" name="jumlah_cones" value="<?php echo $jumlah_cones; ?>">
		</table>
		</form>
		</div>








		<!-- Javascript -->
		<script src="<?php echo base_url ("assets/vendor/jQuery 3.3.1/jquery.min.js") ?>"></script>
		<!-- Jquery -->
		<script src="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.min.js") ?>"></script>
</body>
</html>