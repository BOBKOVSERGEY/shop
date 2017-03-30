<?php

/**
 * Контроллер AdminController
 * Главная страница в админ панели
 */

class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        // проверка доступа
        self::checkAdmin();

        // подключаем вид

        require_once ROOT . '/views/admin/index.php';
        return true;
    }
}