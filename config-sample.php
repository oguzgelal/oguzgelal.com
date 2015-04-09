<?php
/*
* THE REAL CONFIG FILE WAS IGNORED BECAUSE IT CONTAINS PASSWORDS.
* THIS FILE IS THE EXACT COPY OF THE ONE THAT IS USED, WITHOUT THE PASSWORDS.
*/
/* Change to false while deploying to a server */
$local = true;

session_name('oguzgelal');
if(session_id() == ''){ session_start(); }

# DB Settings
if ($local){
	define("DB_NAME", "");
	define("DB_USER", "");
	define("DB_PASSWORD", "");
	define("DB_HOST", "");
}
else {
	define("DB_NAME", "");
	define("DB_USER", "");
	define("DB_PASSWORD", "");
	define("DB_HOST", "");
}

# PATH settings
define("ROOT", "/");
define("VIEWS", "frontend/");
define("TEMPLATES", VIEWS."templates/");
define("THIRDPARTY", VIEWS."thirdparty/");
define("LESS", VIEWS."less/");
define("JS", VIEWS."js/");

# DOMAIN Settings
define("PREFIX", "http://");
if ($local){ define( "DOMAIN", "localhost:8888" ); }
else{ define( "DOMAIN", "yourdomain.com" ); }

