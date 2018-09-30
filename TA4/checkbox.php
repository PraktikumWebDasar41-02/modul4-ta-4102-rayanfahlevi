<!DOCTYPE html>
<html>
<head>
	<title>Checkbox</title>
	<style type="text/css">
		table{
			font-family: verdana, sans-serif;
		}
		input{
			font-family: verdana, sans-serif;
		}
	</style>

</head>
<body>
	<center>
	<h1 align="center">Silahkan pilih hobi, genre film, <br>dan destinasi wisata anda</h1>
	<table>	
		<form action="" method="POST" enctype="multipart/form-data">
		<tr>
			<td>Pilih Hobi Anda</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi[]" value ="Membaca">Membaca <br></td>
		</tr>
		<tr>
			<td colspan="2"></td>		
			<td><input type="checkbox" name="hobi[]" value ="Menulis">Menulis<br></td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td><input type="checkbox" name="hobi[]" value ="Menyanyi">Menyanyi<br></td>
		</tr>
			<td colspan="2"></td>
			<td><input type="checkbox" name="hobi[]" value ="Menari">Menari<br></td>
		<tr>
			<td colspan="2"></td>	
			<td><input type="checkbox" name="hobi[]" value ="Melukis">Melukis<br><br></td>
		</tr>
		<tr>
			<td>Pilih Genre Film Anda<br></td>
			<td>:</td>
			<td><input type="checkbox" name="genre[]" value ="Horror">Horror<br></td>
		</tr>
		<tr>	
			<td colspan="2"></td>	
			<td><input type="checkbox" name="genre[]" value ="Action">Action<br></td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td><input type="checkbox" name="genre[]" value ="Drama">Drama<br></td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td><input type="checkbox" name="genre[]" value ="Thriller">Thriller<br></td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td><input type="checkbox" name="genre[]" value ="Animation">Animation<br></td>
		</tr>
		<tr>
			<td>Pilih Tempat Wisata <br>Tujuan Anda</td>
			<td >:</td>
			<td><input type="checkbox" name="wisata[]" value ="Bali">Bali<br></td>
		</tr>
			<td colspan="2"></td>
			<td><input type="checkbox" name="wisata[]" value ="Raja Ampat">Raja Ampat<br></td>
		<tr>
			<td colspan="2"></td>		
			<td><input type="checkbox" name="wisata[]" value ="Palau Derawan"> Pulau Derawan<br></td>
		</tr>
		<tr>	
			<td colspan="2"></td>	
			<td><input type="checkbox" name="wisata[]" value ="Pulau Samosir"> Pulau Samosir<br></td>
		</tr>
		<tr>
			<td colspan="2"></td>	
			<td><input type="checkbox" name="wisata[]" value ="Labuan Cermin"> Labuan Cermin<br></td>
		</tr>
		<tr>		
			<td colspan="3"><input type="submit" name="submit"></td>
		</tr>
		</form>
	</table>
	</center>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		session_start();
		$hobi = $_POST['hobi'];
		$genre = $_POST['genre'];
		$wisata = $_POST['wisata'];
		$_SESSION['Hobi'] = $hobi;
		$_SESSION['genre'] = $genre;
		$_SESSION['wisata'] = $wisata;
		header('Location:home.php');
	}
?>