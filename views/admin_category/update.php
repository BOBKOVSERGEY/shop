<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/category">Управление категориями</a></li>
                    <li class="active">Редактировать категорию</li>
                </ol>
            </div>


            <h4>Редактировать категорию "<?php echo $category['name']; ?>"</h4>

            <br/>

            <div class="col-md-12">
                <div class="contact-form">
                    <form action="" method="post">

                        <p>Название</p>
                        <input type="text" name="name" class="form-control" placeholder="" value="<?php echo $category['name']; ?>">

                        <p>Порядковый номер</p>
                        <input type="text" name="sort_order" class="form-control" placeholder="" value="<?php echo $category['sort_order']; ?>">

                        <p>Статус</p>
                        <select name="status" class="form-control">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Скрыта</option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-success" value="Сохранить">
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

