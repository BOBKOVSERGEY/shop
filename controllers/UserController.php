<?php

class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (USER::checkName($name)) {
                echo '<br>$name ok!';
            } else {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (USER::checkEmail($email)) {
                echo '<br>$email ok!';
            } else {
                $errors[] = 'Неправильный email';
            }

            if (USER::checkPassword($password)) {
                echo '<br>$password ok!';
            } else {
                $errors[] = 'Пароль не должно быть короче 6-ти символов';
            }
        }



        require_once ROOT . '/views/user/register.php';

        return true;
    }
}