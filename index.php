<?php
error_reporting(0);

if($_SERVER['REQUEST_URI'] == '/'){
	$page='home';
}else{
	$page= substr($_SERVER['REQUEST_URI'],1 );
	if(!preg_match('/^[A-z0-9]{3,15}$/', $page)){
		exit('error url');
	}
}

session_start();

if(file_exists('all/'.$page.'.php')){
	include 'all/'.$page.'.php';
}else if($_SESSION['ulogin'] == 1 and file_exists('auth/'.$page.'.php')){
	include 'auth/'.$page.'.php';
}else if($_SESSION['ulogin'] != 1 and file_exists('guest/'.$page.'.php')){
	include 'guest/'.$page.'.php';
}else exit('Страница 404');


function message($text){
	echo json_encode(["message" => $text]);
}

function go($url){
	echo json_encode(["go" => $url]);
}

function top($title){
   echo "
   <!DOCTYPE html>
	<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<title>".$title."</title>
		<link rel='stylesheet' href='/style.css'>
	</head>
	<body>
	<div class='wrapper'>
	<div class='menu'>
		<a href='/'>Главная</a>
		<a href='/login'>Вход</a>
		<a href='/register'>Регистрация</a>
	</div>
	<div class='content'>
		<div class='block'>
		
   ";
}


function bottom(){
	echo"
		</div>
		</div>
		</div>
		<script src='https://code.jquery.com/jquery-3.5.1.min.js' integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous'></script>
		<script src='script.js'></script>
		</body>
		</html>
	";
}
