<?php include ROOT . '/views/layouts/header.php'; ?>
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">

                    <?php if (isset($errors) && is_array($errors)) :?>
                        <ul>
                            <?php foreach($errors as $error) :?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Регистрация на сайте</h2>
                        <form action="#" method="post">
                            <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Имя"/>
                            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email"/>
                            <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Пароль"/>
                            <button type="submit" name="submit" value="Регистрация" class="btn btn-default">Регистрация</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
<?php include ROOT . '/views/layouts/footer.php'; ?>