<?php

return [
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController

    'catalog' => 'catalog/index', // actionIndex в CatalogController

    '' => 'site/index' // actionIndex в SiteController
];