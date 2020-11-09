<?php top('Восстановление пароля'); ?>
<form id="rec_form">
	<h1>Восстановление пароля</h1>
	<p><input type="text" placeholder="E-mail" id="rec_name"></p>
	<p><input type="text" placeholder="<?php capchaShow()?>" id="captcha"></p>
	<p><button id='rec_button'>Восстановить</button></p>
</form>

<?php bottom(); ?>
