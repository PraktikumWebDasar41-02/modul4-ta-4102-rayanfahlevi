<?php
	session_start();
	$nama = $_SESSION['nama'];
	$up = $_SESSION['up'];
	$hobi = $_SESSION['Hobi'];
	$genre = $_SESSION['genre'];
	$wisata = $_SESSION['wisata'];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
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
 	<br><br><br>
 	<center><table border = '1'>
 			<tr>
 				<center>
 				<td colspan="4"><center><?php echo "<img src = $up>";
 				?>
 				</center></td>
 			</tr>
 			<tr>
 				<td>Nama : <?php echo "$nama"; ?> </td> 
 			</tr>
 			<tr>
 				<td>Hobi : <?php 
 					foreach ($hobi as $hobi) {
 						echo "-$hobi  ";
 					}
 				?></td>
 			</tr>
 			<tr>
 				<td>Genre Film : <?php 
 					foreach ($genre as $genr) {
 						echo "-$genr  ";
 					}
 				?></td>
 			</tr>
 			<tr>
 				<td>Tempat Wisata: <?php 
 					foreach ($wisata as $travelling) {
 						echo "-$travelling  ";
 					}
 				?></td>
 			</center>
 			</tr>
 			<tr>
 				<td colspan="3">
 					<form action = "" method = "POST" style="text-align: center">
 						<input type="submit" name="logout" value= "logout">
 					</form>
 				</td>
 			</tr>
 		</table>
 		<?php
 			if (isset($_POST['logout'])) {
 				session_destroy();
 				header('Location:login.php');
 			}
 		?>
 	</center>
 </body>
 </html>