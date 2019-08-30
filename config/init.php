<?php 	

define(	"DEBUG", 1);
define(	"ROOT", dirname(__DIR__));
define(	"WWW", ROOT . "/public");
define(	"APP", ROOT . "/app");
define(	"CORE", ROOT . "/vendor/ishopfw/core");
define(	"LIBS", ROOT . "/vendor/ishopfw/core/libs");
define(	"CASHE", ROOT . "/tmp/cashe");
define(	"CONF", ROOT . "/config");
define(	"LAYOUT", "default");

// http://ishopfw/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// http://ishopfw/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// http://ishopfw
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';

