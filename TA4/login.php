<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			font-family: verdana, sans-serif;
		}
		input{
			font-family: verdana, helvetica, arial, sans-serif;
		}
	</style>
</head>
<body>
	<div align="center">
		<form method="POST" action="">
			<table  border="1">
				<tr bgcolor="#ef4789">
					<td height="30" colspan="3" align="center"><font color="#000">LOGIN</font></td>
				</tr>
				<tr>
					<td height="25" align="right">Username</td>
					<td>:</td>
					<td> <input type="text" name="username" size="30" maxlength="25"></td>
				</tr>
				<tr>
					<td height="25" align="right">Password</td>
					<td>:</td>
					<td><input type="password" name="password" size="30" maxlength="25"></td>
				</tr>
				<tr>
					<td colspan="3"  align="right"><input type="submit" name="submit" value="login"></td>
				</tr>
</tr>
</table>
</form>
<?php
session_start();
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	header('location:input.php');
}
?>
</body>
</html>