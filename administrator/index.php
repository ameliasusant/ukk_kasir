<?php
include "header.php";
include "navbar.php";
?>
<body>
<style>
		body{
			
			background: url(pel.webp);
			background-size: cover;
			font-family: 'Monotype Corsiva', Times, serif;
			
		}
	</style>
</body>
<div class="card mt-4">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-4">
				<div class="card bg-danger-subtle">
					<div class="card-body">
					<a class="navbar-brand" style="margin-left: 0rem;"><i class="fa-solid fa-box-open"></i>  Data Barang</a></i>
						<?php
						include '../koneksi.php';
						$data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
						$jumlah_produk = mysqli_num_rows($data_produk);
						?>
						<h3><?php echo $jumlah_produk; ?></h3>
						<a href="data_barang.php" class="btn btn-outline-dark btn-sm"><i class="bi bi-chevron-right"></i> Menu</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card bg-dark-subtle">
					<div class="card-body">
					<a class="navbar-brand" style="margin-left: 0rem;"><i class="fa-solid fa-briefcase"></i>  Data Pembelian</a></i>
						<?php
						include '../koneksi.php';
						$data_penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan");
						$jumlah_penjualan = mysqli_num_rows($data_penjualan);
						?>
						<h3><?php echo $jumlah_penjualan; ?></h3>
						<a href="pembelian.php" class="btn btn-outline-dark btn-sm"> <i class="bi bi-chevron-right"></i> Menu </a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card bg-info">
					<div class="card-body">
					<a class="navbar-brand" style="margin-left: 0rem;"><i class="fa-solid fa-users-between-lines"></i>  Data Pengguna</a></i>
						<?php
						include '../koneksi.php';
						$data_petugas = mysqli_query($koneksi,"SELECT * FROM petugas");
						$jumlah_petugas = mysqli_num_rows($data_petugas);
						?>
						<h3><?php echo $jumlah_petugas; ?></h3>
						<a href="data_pengguna.php" class="btn btn-outline-dark btn-sm"><i class="bi bi-chevron-right"></i>Menu</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mt-3">
	<div class="card-body text-center">
		<p><i class="fa-solid fa-face-smile-wink"></i>Selamat datang dihalaman administrator, anda bisa menggunakan menu-menu yang ada di atas</marquee></p>
	</div>
</div>
<?php
include "footer.php";
?>