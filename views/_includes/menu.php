<?php if ( ! defined('ABSPATH')) exit; ?>

<?php if ( $this->login_required && ! $this->logged_in ) return; ?>

<nav class="menu clearfix">
  <ul>
	  <li><a href="<?php echo HOME_URI;?>">Home</a></li>
	  <li><a href="<?php echo HOME_URI;?>/login/">Login Usuarios</a></li>
	  <li><a href="<?php echo HOME_URI;?>/user-register/">Admin Registrer</a></li>
	  <li><a href="<?php echo HOME_URI;?>/noticias/">Estudos</a></li>
	  <li><a href="<?php echo HOME_URI;?>/noticias/adm/">Estudos Admin Post</a></li>
	 
	</ul>
</nav>
