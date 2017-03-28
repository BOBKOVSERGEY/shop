<?php include ROOT . '/views/layouts/header.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title text-center">Кабинет пользователя</h1>
                    <h3>Здравствуйте, <?php echo $user['name']; ?></h3>
                    <ul>
                        <li><a href="/cabinet/edit">Редактировать данные</a></li>
                        <li><a href="/user/history">Список покупок</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php include ROOT . '/views/layouts/footer.php'; ?>