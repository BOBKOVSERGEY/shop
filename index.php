<?php

// FRONT CONTROLLER

// 1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once __DIR__ . '/components/autoload.php';



// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));



// 4. Вызов Router
$router = new Router();
$router->run();
