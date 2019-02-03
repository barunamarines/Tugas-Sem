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

		<!-- isi -->
		<div class="container" style="width: 800px; margin-top: 50px;">
			<table class="table">
				<h2 class="text-center py-3">Pengeluaran</h2>
				<form action="<?php echo base_url(); ?>index.php/Bar_col/pengeluaran_halaman_dua" method="get">
					<thead>
						<tr>
							<th>Jenis Benang, Jenis Celup</th>
							<th>No. Box</th>
							<th>No. Party</th>
							<th>No. Mixing</th>
							<th>Kilogram</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($hasil_bpw as $key => $value)
						{
						?>
						<tr>
							<?php
							//Panggil Function sesuai di controller
							?>
							<td><a href="<?php echo base_url ();?>index.php/Bar_col/pengeluaran_data?&tanggal_hasil=<?php echo $value->tanggal_hasil ?>&jenis_benang=<?php echo $value->jenis_benang ?>&jenis_celup=<?php echo $value->jenis_celup ?>&no_inisial_benang=<?php echo $value->no_inisial_benang ?>&shift=<?php echo $value->shift ?>&panjang_penarikan=<?php echo $value->panjang_penarikan ?>&jumlah_cones=<?php echo $value->jumlah_cones ?>&no_box=<?php echo $value->no_box ?>&no_party=<?php echo $value->no_party?>&no_mixing=<?php echo $value->no_mixing?>&tanggal_pengeluaran=<?php echo $tanggal_pengeluaran?>"><?php echo $value->jenis_benang.' '.$value->jenis_celup; ?></a></td>
							<!-- <td><?php echo $value->tanggal_hasil; ?></td> -->
							<td><?php echo $value->no_box; ?></td>
							<td><?php echo $value->no_party; ?></td>
							<td><?php echo $value->no_mixing; ?></td>
							<td><?php echo $value->berat; ?></td>
							<!-- <td><?php echo $value->no_id; ?></td> -->
						</tr>
						<?php
							}
						?>
					</tbody>
				</form>
			</table>
		</div>



		<!-- Javascript -->
		<script src="<?php echo base_url ("assets/vendor/jQuery 3.3.1/jquery.min.js") ?>"></script>
		<!-- Jquery -->
		<script src="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.min.js") ?>"></script>
</body>
</html>