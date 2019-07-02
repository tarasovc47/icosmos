<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Carousel;

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
	<?php
	$carousel = [
	 [
	 'content' => '<img src="images/podlozhka1.png"/>',
	 'caption' => '<h1>Заголовок1</h1><p>Какой-то дополнительный текст</p><p><a href="/" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
	 'options' => []
	 ],
	 [
	 'content' => '<img src="images/podlozhka2.png"/>',
	 'caption' => '<h1>Заголовок2</h1><p>Какой-то дополнительный текст</p><p><a href="/" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
	 'options' => []
	 ],
	 [
	 'content' => '<img src="images/podlozhka3.png"/>',
	 'caption' => '<h1>Заголовок3</h1><p>Какой-то дополнительный текст</p><p><a href="/" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
	 'options' => []
	 ]
	];

	echo Carousel::widget([
	 'items' => $carousel,
	 'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
	 'controls' => [
	 '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
	 '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
	 ]
	]);
	?>
<?php $this->beginBody() ?>