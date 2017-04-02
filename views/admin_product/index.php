<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="/admin">Админпанель</a></li>
                            <li class="active">Управление товарами</li>
                        </ul>
                    </div>

                    <a href="/admin/product/create" class="btn btn-success back"><i class="fa fa-plus"></i> Добавить товар</a>
                    <h2 class="title text-center">Список товаров</h2>
                        <div class="table-responsive cart_info">
                            <table class="table table-condensed">
                                <thead>
                                <tr class="list-product-menu">
                                    <td class="image">Продукт</td>
                                    <td class="description"></td>
                                    <td class="price">Цена</td>
                                    <td class="quantity">Редактировать</td>
                                    <td class="total">Удалить</td>
                                    <td></td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($productsList as $product) :?>
                                    <tr>
                                        <td class="cart_product">
                                            <a href="/product/<?php echo $product['id']; ?>"><img width="80" src="/template/images/<?php echo $product['image']; ?>" alt=""></a>
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h4>
                                            <p>ID: <?php echo $product['id']; ?></p>
                                            <p>Артикул: <?php echo $product['code']; ?></p>
                                        </td>
                                        <td class="cart_price">
                                            <p>$<?php echo $product['price']; ?></p>
                                        </td>
                                        <td class="list-product-edit">
                                            <a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a>
                                        </td>
                                        <td class="list-product-delete">
                                            <a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>