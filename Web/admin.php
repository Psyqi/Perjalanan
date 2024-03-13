<!DOCTYPE html>
<html lang="en">
<head>

	<title>Sistem Absensi</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="tampilan/style.css">

</head>

<body>
<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
          <div class="container">
            <a class="navbar-brand" href="?page=brand">Sistem Absensi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?page=profil">Data Karyawan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?page=absen">Absensi Karyawan</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
     <!--Akhir dari Navbar-->

     		<?php
     			include "koneksi.php";
     			include "content.php";
     		?>
     
     <!--Awal dari footer-->
     		<div class="footer">
				<hr>
				   &copy; 2021 <br>
				   Fathi Annaqi | SMK SWASTA AL-WASHLIYAH 2 PERDAGANGAN
			</div>
	<!--Akhir dari footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <br>

	<a type="button" class="btn" href="logout.php">LOGOUT</a>

</body>
</html>