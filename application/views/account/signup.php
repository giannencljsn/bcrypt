<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>BCRYPT password </title>
	</head>
	<body>
		<?php echo form_open('account/save'); ?>
		<table>
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>

			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>

			<tr> 
				<td>Full Name</td>
				<td><input type="text" name="fullName"></td>
			</tr>

			<tr> 
				<td>&nbsp;</td>
				<td>
					<input type="submit" value="Save">
					<br>
					<a href="<?php echo site_url('account/signup'); ?>">Sign Up</a>
				</td>

			</tr>
		</table>

		<?php echo form_close(); ?>

	</body>
</html>
