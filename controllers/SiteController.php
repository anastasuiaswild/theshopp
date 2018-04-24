<?php

//include_once ROOT.'/models/Category.php';
//include_once ROOT.'/models/Product.php';

class SiteController
{
    /**
     * @return bool
     */
    public function actionIndex()
    {
        //$categories = array();
        $categories = Category::getCategoriesList();

        //$latestProducts = array();
        $latestProducts = Product::getLatestProducts(9);

        $sliderProducts=Product::getRecommendedProducts();

        require_once (ROOT.'/views/site/index.php');
        return true;
    }

    public function actionContact()
    {
        $userEmail = false;
        $userText = false;
        $result = false;

        if (isset($_POST['submit'])) {

            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            $errors = false;

            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }

            if ($errors == false) {
                $mail = 'greckova.anastasya1@gmail.com';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($mail, $subject, $message);
                $result = true;
            }

        }

        require_once(ROOT . '/views/site/contact.php');
        return true;
    }

    public function actionAbout(){
        require_once(ROOT . '/views/site/about.php');
        return true;
    }

}