<?php

class CartController
{
    public function actionAdd($id)
    {
        // добавляем товар в корзину
        Cart::addProduct($id);

        // возвращаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERRER'];
        header("Location: $referrer");
    }
}