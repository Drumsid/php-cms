<?php 

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new ishopfw\App();

// \ishopfw\App::$app->setProperty('test', 'TEST');

debug(\ishopfw\App::$app->getProperties());