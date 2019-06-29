<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Интернет', 'url' => ['/site/index']],
            ['label' => 'Телевидение', 'url' => ['/site/about']],
            ['label' => 'Пакетные предложения', 'url' => ['/site/contact']],
            ['label' => 'Оплата', 'url' => ['/site/login']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="my-footer-inverse">
    <div class="container-fluid">
        <!-- <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p> -->
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-xl-6 my-footer-col">
                <span class="my-footer-text">ООО «Космос» ИНН 7203452407 ОГРН 1187232015849</span>
                <span class="my-footer-text">Юр.адрес: г. Тюмень ул. Текстильная д. 1, оф. 1</span>
                <span class="my-footer-text">Телефон: <a href= "tel:+73452218888">+7 (3452) 21 88 88</a></span>
                <span class="my-footer-text">E-mail: <a href="mailto:info@ikosmos.tv">info@ikosmos.tv</a></span>
                <span class="my-footer-text">График работы (тут видимо где-то должен быть график работы?)</span>
                <span class="my-footer-text">Техническая поддержка круглосуточно <a href= "tel:+73452218888">+7 (3452) 21 88 88</a></span>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-xl-6 my-footer-col">
                <span class="my-footer-text">Лицензии:</span>
                <span class="my-footer-text">- Оказание услуг связи по передаче данных, за исключением связи по передаче данных для целей передачи голосовой информации</span>
                <span class="my-footer-text"><a href="images/lic-tele.pdf">- Телематические услуги связи</a></span>
                <span class="my-footer-text"><a href="images/lic-ctv.pdf">- Кабельное телевидение</a></span>
                <span class="my-footer-text">Способы оплаты:</span>
                <span class="my-footer-payvariant col-xs-8 col-sm-8 col-md-8 col-xl-8">
            		<img src="images/visa.png" class="col-xs-4 col-sm-4 col-md-4 col-xl-4">
            		<img src="images/mastercard.png" class="col-xs-4 col-sm-4 col-md-4 col-xl-4">
            		<img src="images/mir.png" class="col-xs-4 col-sm-4 col-md-4 col-xl-4">
                </span>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
