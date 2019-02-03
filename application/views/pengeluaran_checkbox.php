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
		<div class="container" style="width: 600px; margin-top: 50px;">
			<table class="table text-center">
				<h2 class="text-center py-3">Checkbox</h2>
				<form action="<?php echo base_url(); ?>index.php/Bar_col/memasukan_data_pengeluaran?tanggal=<?php echo $tanggal_pengeluaran?>" method="post">
					<thead>
						<tr>
							<th>No</th>
							<th>No. Id</th>
							<th>Kilogram</th>
							<th>Checkbox</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							if(!empty($hasil_bpw)){
							foreach ($hasil_bpw as $key => $value) {
						 ?>
						 <tr>
						 	<td><?php echo $no++ ?></td>
						 	<td><input type="hidden" name="no_id[]" value="<?php echo $value->no_id ?>"><?php echo $value->no_id ?></td>
							<td><input type="hidden" name="kilogram[]" value="<?php echo $value->kilogram ?>"><?php echo $value->kilogram ?></td>
							<!-- <td><input type="hidden" name="tanggal" value="<?php echo $value->tanggal_hasil ?>"><?php echo $value->tanggal_hasil ?></td> -->
							<td><input type="checkbox" name="input_data_id[]" value="<?php echo $value->id ?>"></td>
						 </tr>
						 <?php 
							}
						}	
						  ?>
					</tbody>
				</table>
					<td><input type="submit" name="simpan" class="btn btn-primary"></td>
			</form>
			
		</div>



		<!-- Javascript -->
		<script src="<?php echo base_url ("assets/vendor/jQuery 3.3.1/jquery.min.js") ?>"></script>
		<!-- Jquery -->
		<script src="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.min.js") ?>"></script>
</body>
</html>