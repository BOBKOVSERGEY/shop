<?php

class ProductController
{
    public function actionView($productId)
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $product = Product::getProductById($productId);

        require_once ROOT . '/views/product/view.php';

        return true;
    }
}