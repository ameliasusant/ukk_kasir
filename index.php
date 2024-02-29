<!DOCTYPE html>
<html>
<head>
	<title>UKK KASIR</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<style>
		body{
			
			background : url(pin.jpg);
            background-repeat: no-repeat;
            background-size:cover;
			font-family: 'Monotype Corsiva', Times, serif;
			
		}
	</style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body bg-danger-subtle">
                    <div class="text-center">
                        <h5>Login Aplikasi</h5>
                        <i class="fa-solid fa-users-gear"></i>
                    </div>
                    <?php 
							if(isset($_GET['pesan'])){
								if($_GET['pesan']=="gagal"){
									echo "<div class='alert'>Masukkan Username dan Password dengan benar!!</div>";
								}
							}
							?>
                    <form action="cek_login.php" method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <div class="d-grid mt-2">
                            <button class="btn btn-warning" type="submit" name="kirim">MASUK</button>
                        </div>
                    </form>
                   <hr>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>