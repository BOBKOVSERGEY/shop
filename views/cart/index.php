<?php include ROOT . '/views/layouts/header.php'; ?>
    <section id="cart_items">
        <div class="container">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem) : ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
                <div class="col-sm-9">
                    <h2 class="title text-center">Корзина</h2>
                    <?php if ($productsInCart) : ?>
                    <div class="table-responsive cart_info">
                        <table class="table table-condensed">
                            <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
                                <td class="description"></td>
                                <td class="price">Price</td>
                                <td class="quantity">Quantity</td>
                                <td class="total">Total</td>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($products as $product) :?>
                            <tr>
                                <td class="cart_product">
                                    <a href="/product/<?php echo $product['id']; ?>"><img width="80" src="/template/images/<?php echo $product['image']; ?>" alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h4>
                                    <p>Web ID: <?php echo $product['code']; ?></p>
                                </td>
                                <td class="cart_price">
                                    <p>$<?php echo $product['price']; ?></p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href=""> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $productsInCart[$product['id']]; ?>" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href=""> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">$<?php echo $product['price'] * $productsInCart[$product['id']]; ?></p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="/cart/delete/<?php echo $product['id']; ?>"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                      </div>
                        <div class="row">
                            <div class="col-sm-9">
                                <h4>Общая стоимость: </h4>
                            </div>
                            <div class="col-sm-3 text-right">
                                <div class="cart_total_price_my">$<?php echo $totalPrice; ?></div>
                            </div>
                        </div>
                        <a class="btn btn-default checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
                    <?php else : ?>
                    <p>Корзина пуста</p>
                        <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                    <?php endif; ?>
                    </div>
               </div>
       </section> <!--/#cart_items-->
<?php include ROOT . '/views/layouts/footer.php'; ?>