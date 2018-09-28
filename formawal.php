<?php

	session_start();

		$user=array('user'=> 'ikhsan',
					'pass'=> 'qwerty11');

		if (isset($_POST['submit'])) {
			if ($_POST['username']==$user['user']&&$_POST['password']&&$user=['pass']) {
				$_SESSION['user']=$_POST['username'];
					echo "berhasi login, $_POST[username]";

				
			}else{
				form_login();
				echo("username atau password salah");
			}
		}
			else{
				form_login();
			}

			function form_login(){ ?>
				<h2>LOGIN</h2>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
					<table>
						<tr>
							<td>Username :</td>
							<td></td>
							<td><input type="text" name="username" id="username"></td>
						</tr>

						<tr>
							<td>Password :</td>
							<td></td>
							<td><input type="password" name="password" id="password"></td>
						</tr>

						<tr>
							<td><input type="submit" name="submit" value="login"></td>
						</tr>
					</table>
				</form>


				<h2>Pilih</h2>
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
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
				</table>
				</form>
			<?php }

?>
