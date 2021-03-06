<?php
// REQUIRE 
require 'vendor/autoload.php';
require 'config.php';
require 'dbinfo.php';

// INSTANTIATE
$app = new \Slim\Slim;

// CONFIGURE
$app->config(array(
	'debug' => true,
	'templates.path' => substr(TEMPLATES, 1, strlen(TEMPLATES))
	));

// INIT DB OBJECT
$pdo = null;
try { $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8",DB_USER,DB_PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")); } 
catch (PDOException $e) { throw new Exception("Cannot connect to database");}
$app->db = $pdo;

// ROUTES
$app->get('/', function() use ($app){
	$app->render('base.php', array(
		'page'=>'home'
		));
});
$app->get('/portfolio', function() use ($app){
	$app->render('base.php', array(
		'page'=>'portfolio'
		));
});
$app->get('/cv', function() use ($app){
	$app->render('base.php', array(
		'page'=>'resume'
		));
});
$app->get('/blog/post/:id', function($id) use ($app){
	$app->render('base.php', array(
		'page'=>'blogpost',
		'sidepanel_small'=>true,
		'id'=>$id
		));
});
$app->get('/blog', function() use ($app){
	$app->render('base.php', array(
		'page'=>'blog',
		'sidepanel_small'=>true
		));
});
$app->get('/contact', function() use ($app){
	$app->render('base.php', array(
		'page'=>'contact'
		));
});
$app->post('/send', function() use ($app){
	include substr(AJAX, 1, strlen(AJAX))."mail.php";
});

$app->notFound(function() use ($app){
	$app->render('base.php', array(
		'page'=>'notfound'
		));
});

// RUN THE APP
$app->run();


