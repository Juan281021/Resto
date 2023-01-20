<?php
	include 'config/config.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);

	$login 	= $koneksi->query("SELECT * FROM user WHERE nama_user = '$username' AND password = '$password'" );

	$row	= $login->fetch_array();

	if ((@$row['nama_user']) AND (@$row['password']))
	{
		session_start();
		$_SESSION['username']	= $row['nama_user'];
		$_SESSION['password']	= $row['password'];
		$_SESSION['hakakses']	= $row['hak_akses'];
		$_SESSION['foto']		= $row['foto'];
	
		header('location:index.php');
	}
	else
	{
?>
		<script type="text/javascript">
			if (alert("Nama Pengguna atau Kata Kunci Salah"))
			{
				window.location.href='login.html';
			}else
			{
				window.location.href='login.html';
			}
		</script>
<?php
	}
?>