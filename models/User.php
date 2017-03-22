<?php

class User
{
    public static function register()
    {

    }

    /**
     * Проверяем имя: не меньше чем 2 символа
     */
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Проверяем имя: не меньше чем 2 символа
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    /**
     * Проверяем email
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
}