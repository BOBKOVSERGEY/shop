<?php include ROOT . '/views/layouts/header.php'; ?>
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <?php if ($result) :?>
                        <p>Данные отредактированы!</p>
                    <?php else: ?>
                        <?php if (isset($errors) && is_array($errors)) :?>
                            <ul>
                                <?php foreach($errors as $error) :?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="signup-form"><!--sign up form-->
                            <h2>Редактирование данных</h2>
                            <form action="" method="post">
                                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Имя"/>
                                <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Пароль"/>
                                <button type="submit" name="submit" value="Сохранить" class="btn btn-default">Сохранить</button>
                            </form>
                        </div><!--/sign up form-->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section><!--/form-->
<?php include ROOT . '/views/layouts/footer.php'; ?>