<?php top('Вход'); ?>
<form id="login_form">
   <h1>Вход</h1>
   <p><input type="text" placeholder="E-mail" id="login_name"></p>
   <p><input type="password" placeholder="Password" id="login_pass"></p>
   <p><input type="text" placeholder="Столица России" id="login_capcha"></p>
   <p><button id='login_button'>Войти</button></p>
   <p><button id='login_button_reest'>Восстановить пароль</button></p>
</form>

<?php bottom(); ?>
