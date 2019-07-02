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
	 'caption' => '<h3>Заголовок1</h3><p>Какой-то дополнительный текст</p><p><a href="/" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
	 'options' => []
	 ],
	 [
	 'content' => '<img src="images/podlozhka2.png"/>',
	 'caption' => '<h3>Заголовок2</h3><p>Какой-то дополнительный текст</p><p><a href="/" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
	 'options' => []
	 ],
	 [
	 'content' => '<img src="images/podlozhka3.png"/>',
	 'caption' => '<h3>Заголовок3</h3><p>Какой-то дополнительный текст</p><p><a href="/" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
	 'options' => []
	 ]
	];

	echo Carousel::widget([
	 'items' => $carousel,
	 'options' => ['class' => 'carousel slide my-clear', 'data-interval' => '12000'],
	 'controls' => [
	 '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
	 '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
	 ]
	]);
	?>
	<div id="my-index-internet">
		<div class="row">
		  <div class="my-tariff col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="images/tariffs/lunohod.png" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-caption">
		        <h4 class="my-tariff-name">"Луноход"</h4>
		        <div class="my-tariff-speed">
		        	<p class="my-speed">Скорость:</p>
		        	<p class="my-mbit">50 MBit</p>
		        </div>
		        <div class="my-tariff-cost">
		        	<p class="my-cost-cost">Стоимость тарифа</p>
		        	<p class="my-cost-rubl">200 &#8381;</p>
		        </div>
		        <p><a href="#" class="btn btn-primary" role="button">Подключиться</a> <a href="#" class="btn btn-default" role="button">Подробнее</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="images/tariffs/raketa.png" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-caption">
		        <h4 class="my-tariff-name">"Ракета"</h4>
		        <div class="my-tariff-speed">
		        	<p class="my-speed">Скорость:</p>
		        	<p class="my-mbit">100 MBit</p>
		        </div>
		        <div class="my-tariff-cost">
		        	<p class="my-cost-cost">Стоимость тарифа</p>
		        	<p class="my-cost-rubl">300 &#8381;</p>
		        </div>
		        <div class="my-tariff-buttons">
		        	<div><a href="#" class="btn btn-primary" role="button">Подключиться</a></div>
		        	<div><a href="#" class="btn btn-default" role="button">Подробнее</a></p></div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
<?php $this->beginBody() ?>