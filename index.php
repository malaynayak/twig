<?php

ini_set('display_errors', '1');
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

if(isset($_GET['page']) && $_GET['page'] == 'about'){
	echo $twig->render('about.html', array('name' => 'Fabien'));
} else {
	echo $twig->render('index.html', array('name' => 'Fabien'));
}
