<?php

class CartController
{
    public function actionAdd($id)
    {
        // добавляем товар в корзину
        Cart::addProduct($id);

        // возвращаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionAddAjax($id)
    {
        // Добавляем товар в корзину
        echo Cart::addProduct($id);
        return true;
    }

    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $productsInCart = false;

        // получим данные из корзины
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // получим полную информацию о товарах для списка
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);

            // получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once ROOT . '/views/cart/index.php';

        return true;
    }
}