<?php if ( ! defined('ABSPATH')) exit; ?>

<div class="wrap">

<?php
// Carrega todos os métodos do modelo
$modelo->validate_register_form();
$modelo->get_register_form( chk_array( $parametros, 1 ) );
$modelo->del_user( $parametros );
?>

<form method="post" action="">
	<table class="form-table">
		<tr>
			<td>Nome: </td>
			<td> <input type="text" name="user_name" value="<?php 
				echo htmlentities( chk_array( $modelo->form_data, 'user_name') );
				?>" /></td>
		</tr>
		<tr>
			<td>Usuário: </td>
			<td> <input type="text" name="user" value="<?php
				echo htmlentities( chk_array( $modelo->form_data, 'user') );
			?>" /></td>
		</tr>
		<tr>
			<td>Senha: </td>
			<td> <input type="password" name="user_password" value="<?php
			echo htmlentities( chk_array( $modelo->form_data, 'user_password') );
			?>" /></td>
		</tr>
		<tr>
			<td>Permissão:<br><small>(Separate permissions using commas)</small>: </td>
			<td> <input type="text" name="user_permissions" value="<?php
			echo htmlentities( chk_array( $modelo->form_data, 'user_permissions') );
			?>" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $modelo->form_msg;?>
				<input type="submit" value="Save" />
				<a href="<?php echo HOME_URI . '/user-register';?>">Novo Usuário</a>
			</td>
		</tr>
	</table>
</form>

<?php 
// Lista os usuários
$lista = $modelo->get_user_list(); 
?>


<table class="list-table">
	<thead>
		<tr>
			<th width="21">ID</th>
			<th width="52">Usuário</th>
			<th width="40">Nome</th>
			<th width="76">Permissão</th>
			<th width="106">Edição</th>
		</tr>
	</thead>
			
	<tbody>
			
		<?php foreach ($lista as $fetch_userdata): ?>

			<tr>
			
				<td> <?php echo $fetch_userdata['user_id'] ?> </td>
				<td> <?php echo $fetch_userdata['user'] ?> </td>
				<td> <?php echo $fetch_userdata['user_name'] ?> </td>
				<td> <?php echo implode( ',', unserialize( $fetch_userdata['user_permissions'] ) ) ?> </td>
				
				<td> 
					<a href="<?php echo HOME_URI ?>/user-register/index/edit/<?php echo $fetch_userdata['user_id'] ?>"> Edit</a>
					/<a href="<?php echo HOME_URI ?>/user-register/index/del/<?php echo $fetch_userdata['user_id'] ?>"> Delete</a>
				</td>

			</tr>
			
		<?php endforeach;?>
			
	</tbody>
</table>

</div> <!-- .wrap -->
