<?php 

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new ishopfw\App();

// \ishopfw\App::$app->setProperty('test', 'TEST');

throw new Exception('Страница не найдена', 404);