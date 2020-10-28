<!DOCTYPE html>
<html>
<head>
	<title>Meramput Shop</title>
</head>
<link rel="stylesheet" type="text/css" href="public/register.css">
<body>
	<div class="box">
		<div class="judul">
			<h2> Selamat Datang ADMIN </h2>
			<hr>
		</div>
		<div class="menu">
			<div class="login">
				<h2> Daftar Sekarang </h2>
			</div>		
		</div>
		<div class="input">
			<div class="username">
				<input type="text" name="" placeholder="Username">
			</div>

			<div class="username">
				<input type="text" name="" placeholder="Email">
			</div>

			<div class="password">
				<input type="password" name="" placeholder="Password">
			</div>

			<div class="password">
				<input type="password" name="" placeholder="Confirm Password">
			</div>

			<div class="username">
				<input type="text" name="" placeholder="Nomor HP">
			</div>

			<button><a href="{{ url('/admin') }}">Daftar</a></button>
		</div>
	</div>
</body>
</html>