<?php 

namespace ishopfw;

class App {

	public static $app; // свойство нашего приложения для доступа к параметрам

	public function __construct()
	{
		$query = trim($_SERVER['QUERY_STRING'], '/');//проверяем что ввел пользователь
		session_start();
		self::$app = Registry::instance(); // создаем объект класса Registry, заносим его в свойство объекта $app (используем метод из трейта)
		$this->getParams(); // вызываем метод который заносит все параметры в свойство
		new ErrorHandler(); // вызываем свой обработчик ошибок
	}

	protected function getParams() {
		$params = require_once CONF . '/params.php'; // заносим в переменную массив с параметрами из файла парамс
		if (!empty($params)) {
			foreach ($params as $k => $v) {
				self::$app->setProperty($k, $v); // заносим все параметры в свойство $app
			}
		}
	}
}
