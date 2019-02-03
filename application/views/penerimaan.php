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
		<div class="container" style="width: 500px; margin-top: 50px;">
				<table class="table">
					<h1 class="text-center">Penerimaan</h1>
					<br>
					<form action="<?php echo base_url(); ?>index.php/Bar_col/masuk_data" method="post">
						<tr>
							<th><label for="tanggal_terima">Tanggal Terima</label></th>
								<td><input type="date" id="tanggal_terima" name="tanggal_terima" class="form-control" value="<?php echo $this->session->userdata('tanggal_terima'); ?>"></td>
						</tr>
						<tr>
							<th><label for="jenis_benang">Jenis Benang</label></th>
								<td>
									<select class="form-control" id="jenis_benang" style="width: 300px;" required name="jenis_benang">
										<option value="Pilih Jenis Benang"></option>
										<option value="Argentina">Argentina</option>
										<option value="Brazil">Brazil</option>
										<option value="India">India</option>
										<option value="Amerika">Amerika</option>
								</td>
									</select>
						</tr>
						<tr>
							<th><label for="no_mixing">No Mixing</label></th>
								<td><input type="text" name="no_mixing" id="no_mixing" class="form-control" required autofocus maxlength="20" placeholder="Input No Mixing"></td>
						</tr>
						<tr>
							<th><label for="jumlah_cones">Jumlah Cones</label></th>
								<td><input type="number" name="jumlah_cones" id="jumlah_cones" class="form-control" required autofocus maxlength="20" placeholder="Input Jumlah Cones"></td>
						</tr>
						<tr>
							<th><label for="jumlah_kilogram">Jumlah Kilogram</label></th>
								<td><input type="number" name="jumlah_kilogram" id="jumlah_kilogram" class="form-control" required autofocus maxlength="20" placeholder="Input Jumlah Kilogram"></td>
						</tr>
						<tr>
							<td><button type="submit" name="simpan" class="btn btn-primary">Submit</button></td>
						</tr>
					</form>
				</table>
		</div>








		<!-- Javascript -->
		<script src="<?php echo base_url ("assets/vendor/jQuery 3.3.1/jquery.min.js") ?>"></script>
		<!-- Jquery -->
		<script src="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.min.js") ?>"></script>
</body>
</html>