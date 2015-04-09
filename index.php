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
	'templates.path' => TEMPLATES
	));

// INIT DB OBJECT
$pdo = null;
try { $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8",DB_USER,DB_PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")); } 
catch (PDOException $e) { throw new Exception("Cannot connect to database");}
$app->db = $pdo;

// ROUTES
$app->get('/', function() use ($app){
	$app->render('base.php', array('page'=>'home'));
});

// RUN THE APP
$app->run();


