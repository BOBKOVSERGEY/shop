<?php include ROOT . '/views/layouts/header.php'; ?>
    <section><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="contact-form">
                        <h2 class="title text-center">Обратная связь</h2>
                    <?php if ($result) : ?>
                        <div class="status alert alert-success"><p>Сообщение отправлено! Мы ответим Вам на указанный email.</p></div>

                        <?php else : ?>
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
                                <input type="email" name="userEmail" class="form-control" value="<?php echo $userEmail; ?>" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="userSubject" class="form-control" value="<?php echo $userSubject; ?>" placeholder="Тема письма">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="userMessage" id="userMessage" class="form-control" rows="8" value="<?php echo $userMessage; ?>" placeholder="Введите ваше сообщение"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Отправить">
                            </div>
                        </form>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/form-->
<?php include ROOT . '/views/layouts/footer.php'; ?>