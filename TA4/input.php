<!DOCTYPE html>
<html>
<head>
	<title>input</title>
	<style type="text/css">
		table{
			font-family: verdana, sans-serif;
		}
		input{
			font-family: verdana, sans-serif;
		}
	</style>
</head>
<body >
 	<br><br><br>
	<center>
		<h1> Masukan Data Anda</h1>
		<table>		
			<form action = "" method="POST" enctype="multipart/form-data">
			
			<tr>	
				<TD>Nama</TD> 
				<td>:</td>
				<td> <input type="text" name="nama"></td><br>
			</tr>	
			<tr>
				<td>Upload</td>
				<td>:</td>
				<td><input type="file" name="up"></td><br>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
			</form>
		</table>
	</center>
</body>
</html>

<?php 
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$up = $_FILES['up']['tmp_name'];
		$upload = "gambar/".basename($_FILES['up']['name']);
		move_uploaded_file($up, $upload);
		$show = "gambar/".$_FILES['up']['name'];
		session_start();
		$_SESSION['nama'] = $nama;
		$_SESSION['up'] = $show;
		header('Location:checkbox.php');
	}
?>