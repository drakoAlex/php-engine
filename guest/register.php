<?php top('Регистрация'); ?>
<form id="reg_form">
	<h1>Регистрация</h1>
	<p><input type="text" placeholder="E-mail" id="reg_name"></p>
	<p><input type="password" placeholder="Password" id="reg_pass"></p>
	<p><input type="text" placeholder="<?php capchaShow()?>" id="captcha"></p>
	<p><button id='reg_button'>Регистрация</button></p>
</form>

<?php bottom(); ?>
