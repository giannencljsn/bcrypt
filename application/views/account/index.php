<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>BCRYPT password </title>
	</head>
	<body>
		<?php echo form_open('account/login'); ?>
		<?php echo isset($error) ? error : ''; ?>
		<table>
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>

			<tr> 
				<td>Password</td>
				<td><input type="password" name="username"></td>
			</tr>

			<tr> 
				<td>&nbsp;</td>
				<td>
					<input type="submit" value="Login">
					<br>
					<a href="<?php echo site_url('account/signup'); ?>">Sign Up</a>
				</td>

			</tr>
		</table>

		<?php echo form_close(); ?>

	</body>
</html>
