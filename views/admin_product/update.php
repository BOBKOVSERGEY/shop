<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 admin-content">
                    <div class="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="/admin">Админпанель</a></li>
                            <li><a href="/admin/product">Управление товарами</a></li>
                            <li class="active">Редактировать товар</li>
                        </ul>
                    </div>
                    <h2>Редактировать товар #<?php echo $id; ?></h2>
                    <div class="col-sm-12">
                        <div class="contact-form">
                            <form action="" method="post" class="contact-form" enctype="multipart/form-data">

                                <p>Название товара</p>
                                <input type="text" name="name" class="form-control" placeholder="Введите название товара" value="<?php echo $product['name'];?>">

                                <p>Артикул</p>
                                <input type="text" name="code" class="form-control" placeholder="Введите артикул" value="<?php echo $product['code'];?>">

                                <p>Стоимость, $</p>
                                <input type="text" class="form-control" name="price" placeholder="Введите стоимость" value="<?php echo $product['price'];?>">

                                <p>Категория</p>
                                <select name="category_id" class="form-control">
                                    <?php if (is_array($categoriesList)): ?>
                                        <?php foreach ($categoriesList as $category): ?>
                                            <option value="<?php echo $category['id']; ?>"
                                                <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                                <?php echo $category['name']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>

                                <br/><br/>
                                <p>Производитель</p>
                                <input type="text" name="brand" class="form-control" placeholder="Введите производителя" value="<?php echo $product['brand'];?>">

                                <p>Изображение товара</p>
                                <img src="/template/images/<?php echo $product['image']; ?>" width="200" alt="">
                                <input type="file" name="image" placeholder="" value="<?php echo $product['image'];?>">

                                <p>Детальное описание</p>
                                <textarea name="description" class="form-control" rows="12" placeholder="Введите описание"><?php echo $product['description']; ?></textarea>

                                <br/><br/>

                                <p>Наличие на складе</p>
                                <select name="availability" class="form-control">
                                    <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"' ;?>>Да</option>
                                    <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"' ;?>>Нет</option>
                                </select>

                                <br/><br/>

                                <p>Новинка</p>
                                <select name="is_new" class="form-control">
                                    <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"' ;?>>Да</option>
                                    <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"' ;?>>Нет</option>
                                </select>

                                <br/><br/>

                                <p>Рекомендуемые</p>
                                <select name="is_recommended" class="form-control">
                                    <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"' ;?>>Да</option>
                                    <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"' ;?>>Нет</option>
                                </select>

                                <br/><br/>

                                <p>Статус</p>
                                <select name="status" class="form-control">
                                    <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"' ;?>>Отображается</option>
                                    <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"' ;?>>Скрыт</option>
                                </select>

                                <br/><br/>

                                <input type="submit" name="submit" class="btn btn-success" value="Сохранить">

                                <br/><br/>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>