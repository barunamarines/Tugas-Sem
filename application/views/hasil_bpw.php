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
					<h1 class="text-center">Hasil BPW</h1>
					<br>
					<form action="<?php echo base_url(); ?>index.php/Bar_col/hasil_bpw_dua" method="get">
						<tr>
							<th><label for="tanggal_hasil">Tanggal Hasil</label></th>
								<td><input type="date" id="tanggal_hasil" name="tanggal_hasil" class="form-control" value=""></td>
						</tr>
						<tr>
							<th><label for="no_inisial_benang">No. Inisial Benang</label></th>
								<td><input type="number" id="no_inisial_benang" name="no_inisial_benang" class="form-control" required autofocus maxlength="20" placeholder="No. Inisial"></td>
						</tr>
						<tr>
							<th><label for="jenis_benang">Jenis Benang</label></th>
								<td>
									<select class="form-control select2 select2-hidden-accessible" id="jenis_benang" placeholder="Pilih Jenis Benang" style="width: 290px;" required name="jenis_benang" tabindex="-1" aria-hidden="true">
										<option value="">Pilih Jenis Benang</option>
										<option value="Argentina">Argentina</option>
										<option value="Brazil">Brazil</option>
										<option value="India">India</option>
										<option value="Amerika">Amerika</option>
								</td>
									</select>
						</tr>
						<tr>
							<th><label for="jenis_celup">Jenis Celup</label></th>
								<td>
									<select class="form-control select2 select2-hidden-accessible" id="jenis_celup" placeholder="Pilih Jenis Celup" style="width: 290px;" required name="jenis_celup" tabindex="-1" aria-hidden="true">
										<option value="">Pilih Jenis Celup</option>
										<?php 
										foreach ($jenis_celup->result() as $row)
										{
										    ?>
										    <option value="<?php echo $row->jenis_celup; ?>"><?php echo $row->jenis_celup; ?></option>
										    <?php
										}
										 ?>
										<!-- <option value="Celup_satu">Celup Satu</option>
										<option value="Celup_dua">Celup Dua</option>
										<option value="Celup_tiga">Celup Tiga</option>
										<option value="Celup_empat">Celup Empat</option> -->
								</td>
									</select>
						</tr>
						<tr>
							<th><label for="no_mixing">No Mixing</label></th>
								<td><input type="text" name="no_mixing" id="no_mixing" class="form-control" required autofocus maxlength="20" placeholder="No. Mixing"></td>
						</tr>
						<tr>
							<th><label for="no_party">No Party</label></th>
								<td><input type="text" name="no_party" id="no_party" class="form-control" required autofocus maxlength="20" placeholder="No. Party"></td>
						</tr>
						<tr>
							<th><label for="jenis_celup">Shift</label></th>
								<td>
									<select class="form-control select2 select2-hidden-accessible" id="shift" placeholder="Pilih Jenis Shift" style="width: 290px;" required name="shift" tabindex="-1" aria-hidden="true">
										<option value="U">U</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="C">C</option>
								</td>
									</select>
						</tr>
						<tr>
							<th><label for="panjang_penarikan">Panjang Penarikan</label></th>
								<td><input type="number" name="panjang_penarikan" id="panjang_penarikan" class="form-control" required autofocus maxlength="20" placeholder="Input Panjang Penarikan"></td>
						</tr>
						<tr>
							<th><label for="no_id">No Id</label></th>
								<td><input type="text" name="no_id" id="no_id" class="form-control" required autofocus maxlength="20" placeholder="No. Id"></td>
						</tr>
						<tr>
							<th><label for="no_box">No Box</label></th>
								<td><input type="text" name="no_box" id="no_box" class="form-control" required autofocus maxlength="20" placeholder="No. Box"></td>
						</tr>
						<tr>
							<th><label for="jumlah_cones">Jumlah Cones</label></th>
								<td><input type=" " name="jumlah_cones" id="jumlah_cones" class="form-control" required autofocus maxlength="20" placeholder="Input Jumlah Cones"></td>
						</tr>
						<tr>
							<th><label for="kilogram">Kilogram</label></th>
								<td><input type="number" name="kilogram" id="kilogram" class="form-control" required autofocus maxlength="20" placeholder="Input Kilogram"></td>
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