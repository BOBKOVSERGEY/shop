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
                    <div class="contact-form">
                        <?php if ($result) : ?>
                            <div class="status alert alert-success"><p>Заказ оформлен, мы вам перезвоним</p></div>

                        <?php else : ?>
                            <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: $<?php echo $totalPrice; ?></p>
                            <?php if (isset($errors) && is_array($errors)) :?>

                                <?php foreach($errors as $error) :?>
                                    <div class="status alert alert-danger"><?php echo $error; ?></div>
                                <?php endforeach; ?>

                            <?php endif; ?>
                            <form action="" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                                <div class="form-group col-md-6">
                                    <input type="text" name="userName" class="form-control" value="<?php echo $userName; ?>" placeholder="Имя">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="userPhone" class="form-control" value="<?php echo $userPhone; ?>" placeholder="Телефон">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="userComment" class="form-control" rows="8" placeholder="Введите ваше сообщение"><?php echo $userComment; ?></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Оформить">
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
    </section> <!--/#cart_items-->
<?php include ROOT . '/views/layouts/footer.php'; ?>