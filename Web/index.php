<!DOCTYPE html>
<html>
<head>

	<title>Sistem Absensi</title>

	<link rel="stylesheet" type="text/css" href="tampilan/masuk.css">

</head>

<body>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<h1>Sistem Absensi</h1>
	<br>
	<h2>Halaman Untuk Login Bagi Pengguna Yang Memiliki Akun User</h2>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Login</p>
 
		<form action="login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="signup.php">Daftar</a>
			</center>
		</form>
		
	</div>

</body>
</html>