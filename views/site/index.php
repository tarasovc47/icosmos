<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;
use app\models\ContactForm;
use yii\captcha\Captcha;

$this->title = 'Kosmos';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!--Start-slider-script-->
</head>
<!-- Head -->
<body>
    <div class="modal fade" id="my-modal-arsenalpay">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div id='arsenalpay-widget'></div>
                    <script src='https://arsenalpay.ru/widget/script.js'></script>
                    <script>
                        var widget = new ArsenalpayWidget();
                        widget.element = 'arsenalpay-widget';
                        widget.widget = 674;
                        widget.render();
                    </script>
                </div>
            </div>
        </div>
    </div>
	<?php
	echo Carousel::widget([
	 'items' => \app\models\Carousels::$carousel_first,
	 'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
	 'controls' => [
	 '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
	 '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
	 ]
	]);

    echo Carousel::widget([
    'items' => \app\models\Carousels::$carousel_two,
    'options' => ['class' => 'carousel slide'],
    'controls' => [
    '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
    '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
    ]
    ]);

    $this->beginBody() ?>
<script src="//unpkg.com/@textback/notification-widget@latest/build/index.js"></script>
<tb-notification-widget  widget-id=190f222f-89e9-b092-39df-016bb8e2b03d></tb-notification-widget>