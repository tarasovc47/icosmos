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

<footer class="footer">
    <div class="container-fluid">
        <!-- <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p> -->
        <div class="row">
             <div class="col-xs-6 col-sm-6 col-md-6 col-xl-6">
                 <p class="my_center-block">ООО «Космос» ИНН 7203452407 ОГРН 1187232015849</p>
                 <p class="my_center-block">Юр.адрес: г. Тюмень ул. Текстильная д. 1, оф. 1</p>
                 <p class="my_center-block">Телефон: +7 (3452) 21 88 88</p>
                 <p class="my_center-block">E-mail: info@ikosmos.tv</p>
                 <p class="my_center-block">График работы</p>
                 <p class="my_center-block">Техническая поддержка круглосуточно +7 (3452) 21 88 88</p>
             </div>
             <div class="col-xs-6 col-sm-6 col-md-6 col-xl-6">
                 <p class="my_center-block">Лицензии:</p>
                 <p class="my_center-block">- Оказание услуг связи по передаче данных, за исключением связи по передаче данных для целей передачи голосовой информации</p>
                 <p class="my_center-block">- Телематические услуги связи</p>
                 <p class="my_center-block">- Кабельное телевидение</p>
                 <p class="my_center-block">Способы оплаты:</p>
                 <p class="my_center-block">Техническая поддержка круглосуточно +7 (3452) 21 88 88</p>
             </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
