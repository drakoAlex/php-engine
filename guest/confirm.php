<?php top('Подтверждение'); ?>
<form id="conf_form">
	<h1>Подтверждение</h1>
	<p><input type="text" placeholder="E-mail" id="conf_name"></p>
	<p><input type="password" placeholder="Password" id="conf_pass"></p>
	<p><input type="text" placeholder="<?php capchaShow()?>" id="captcha"></p>
	<p><button id='conf_button'>Подтвердить</button></p>
</form>

<?php bottom(); ?>
