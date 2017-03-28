<?php


class SiteController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $latestProducts = [];
        $latestProducts = Product::getLatestProduct(6);

        require_once ROOT . '/views/site/index.php';

        return true;
    }

    public function actionContact()
    {
        $userName = '';
        $userEmail = '';
        $userSubject = '';
        $userMessage = '';

        $result = false;

        if (isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $userEmail = $_POST['userEmail'];
            $userSubject = $_POST['userSubject'];
            $userMessage = $_POST['userMessage'];

            $errors = false;

            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }

            if ($errors == false) {
                $adminEmail = 'sergey_bobkov@inbox.ru';
                $message = "Текст: {$userMessage}. От {$userEmail}" . " Имя: {$userName}";
                $subject = $userSubject;
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
         }

        require_once ROOT . '/views/site/contact.php';

        return true;
    }
}