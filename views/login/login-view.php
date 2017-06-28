<?php if ( ! defined('ABSPATH')) exit; ?>

<div class="wrap">




<?php
if ( $this->logged_in ) {
	echo '<p class="alert">Logado</p>';
}
?>

	<form method="post">
		<table class="form-table">
			<tr>
				<td>Usuário:</td> 
				<td><input name="userdata[user]"></td>
			</tr>
			<tr>
				<td>Senha: </td>
				<td><input type="password" name="userdata[user_password]"></td>
			</tr>
			<?php
			if ( $this->login_error ) {
				echo '<tr><td colspan="2" class="error">' . $this->login_error . '</td></tr>';
			}
			?>
			<tr>
				<td colspan="2">
					<input type="submit" value="Enter">
					<input type="submit" value="Sair" /> 
				</td>
			</tr>
		</table>
	</form>
	
</div> <!-- .wrap -->