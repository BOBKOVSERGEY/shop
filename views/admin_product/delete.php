<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 admin-content">
                    <div class="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="/admin">Админпанель</a></li>
                            <li><a href="/admin/product">Управление товарами</a></li>
                            <li class="active">Удалить товар</li>
                        </ul>
                    </div>
                    <h2>Удалить товар #<?php echo $id; ?></h2>
                    <p>Вы действительно хотите удалить этот товар?</p>
                    <form action="" method="post">
                        <input type="submit" name="submit" class="btn btn-danger" value="Удалить">
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>