<?php

class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false) {
                $result = User::register($name, $email, $password);
            }

        }

        require_once ROOT . '/views/user/register.php';

        return true;
    }

    public function actionLogin()
    {
        $email = '';
        $password = '';

        if  (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            // валидация полей

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            // проверяем, существует ли пользователь
            $userID = User::checkUserData($email, $password);

            if ($userID == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // если данные правильные, запоминаем пользователя (сессия);
                User::auth($userID);

                // перенаправляем пользователя в закрытую часть кабинета
                header("Location: /cabinet/");
            }
        }

        require_once ROOT . '/views/user/login.php' ;

        return true;
    }


    // Удаляем данные о пользователе из сессии

    public function actionLogout()
    {
        unset($_SESSION["user"]);
        header("Location: /");
    }

}