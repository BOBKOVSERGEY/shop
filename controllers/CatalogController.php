<?php


class CatalogController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $latestProducts = [];
        $latestProducts = Product::getLatestProduct(12);

        require_once ROOT . '/views/catalog/index.php';

        return true;
    }
}