<!DOCTYPE html>
<html>
<head>
	<title>proses</title>
</head>
<body>
<h2>Pilih Makanan</h2>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST">
		<table>
			<tr>
				<td><input type="checkbox" name="makanan[]" value="baso">Baso</td>
			</tr>

			<tr>
				<td><input type="checkbox" name="buah[]" value="jeruk">Jeruk</td>
			</tr>
			
			<tr>
				<td><input type="checkbox" name="laptop[]" value="acer">Acer</td>
			</tr>

			<tr>
				<td><input type="submit" name="send" value="submit"></td>
			</tr>
			</table>
			</form>

	<h2>Pilih Hobi</h2>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
			<table>
				<tr>
				<td><input type="checkbox" name="hobi[]" value="renang">Renang</td>
			</tr>

			<tr>
				<td><input type="checkbox" name="hobi[]" value="nari">Nari</td>
			</tr>
			
			<tr>
				<td><input type="checkbox" name="hobi[]" value="bola">Main Bola</td>
			</tr>

			<tr>
				<td><input type="submit" name="send" value="submit"></td>
			</tr>
			</table>
		</form>

			
</body>
</html>

