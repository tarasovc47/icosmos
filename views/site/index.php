<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;

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
	 'content' => '<img src="images/podlozhka1v2.png"/>',
	 'caption' => '<h3>Заголовок1</h3><p>Какой-то дополнительный текст</p><p><a href="/" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
	 'options' => []
	 ],
	 [
	 'content' => '<img src="images/podlozhka2v2.png"/>',
	 'caption' => '<h3>Заголовок2</h3><p>Какой-то дополнительный текст</p><p><a href="/" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
	 'options' => []
	 ],
	 [
	 'content' => '<img src="images/podlozhka3v2.png"/>',
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
		<div class="my-internet">Космический интернет</div>
		<div class="row">
		  <div class="my-tariff col-xs-12 col-sm-7 col-md-4 col-lg-2">
		    <div class="thumbnail">
		      <img src="images/tariffs/lunohod.png" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-internet-caption">
		        <h4 class="my-tariff-name">"Луноход"</h4>
		        <div class="my-internet-param">
		        	<p class="my-speed">Скорость:</p>
		        	<p class="my-mbit">50 Мбит/с</p>
		        </div>
		        <div class="my-internet-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl">300 &#8381;/месяц</p>
		        </div>
		        <div class="my-internet-buttons">
		        	<!-- <div><a href="#" class="btn my-btn-default" role="button">Подробнее</a></div> -->
		        	<?php
						Modal::begin([
							'bodyOptions' => [
								'class' => 'my-modal-internet',
							],
							'header' => '<h2 class="my-modal-header">Тарифный план "Луноход"</h2>',
							'toggleButton' => [
							'label' => 'Подробнее',
							'tag' => 'button',
							'class' => 'btn my-btn-default',
							],
							'footer' => 'VIP подключение:
• укладка кабеля в плинтуса до места подключения абонентских устройств
• гибкий выбор времени подключения
• сохранность ремонта
При единовременной оплате услуг за 1 год предоставляется скидка 15%
Наличие технической возможности подключения уточняйте по телефону +7 (3452) 21 88 88 или на сайте в разделе заявка на подключение',
							]);
							?>
							<table>
								<tr>
									<th>Услуга</th>
									<th>Характеристика</th>
								</tr>
								<tr>
									<td>Абонентская плата</td>
									<td>300 &#8381/мес</td>
								</tr>
								<tr>
									<td>Скорость доступа</td>
									<td>до 50 Мбит/с</td>
								</tr>
								<tr>
									<td>Подключение</td>
									<td>бесплатно</td>
								</tr>
								<tr>
									<td>VIP-подключени</td>
									<td>1000 &#8381</td>
								</tr>
								<tr>
									<td>Wi-Fi роутер</td>
									<td>рассрочка 24 месяца - 50 &#8381/мес<br>покупка - 1500 &#8381</td>
								</tr>
								<tr>
									<td>Настройка оборудования</td>
									<td>бесплатно</td>
								</tr>
							</table>
							<div class="my-modal-internet-footer">
								
							</div>
							<?php
						Modal::end();
					?>
		        	<div><a href="#" class="btn my-btn-primary" role="button">Подключиться</a></div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-7 col-md-4 col-lg-2">
		    <div class="thumbnail">
		      <img src="images/tariffs/raketa.png" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-internet-caption">
		        <h4 class="my-tariff-name">"Ракета"</h4>
		        <div class="my-internet-param">
		        	<p class="my-speed">Скорость:</p>
		        	<p class="my-mbit">100 Мбит/с</p>
		        </div>
		        <div class="my-internet-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl">400 &#8381;/месяц</p>
		        </div>
		        <div class="my-internet-buttons">
		        	<?php
						Modal::begin([
					 'header' => '<h2>Hello world</h2>',
					 'toggleButton' => [
					 'label' => 'Подробнее',
					 'tag' => 'button',
					 'class' => 'btn my-btn-default',
					 ],
					 'footer' => 'Низ окна',
					]);
						Modal::end();
					?>
		        	<div><a href="#" class="btn my-btn-primary" role="button">Подключиться</a></div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-7 col-md-4 col-lg-2">
		    <div class="thumbnail">
		      <img src="images/tariffs/kosmolet.svg" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-internet-caption">
		        <h4 class="my-tariff-name">"Космолёт"</h4>
		        <div class="my-internet-param">
		        	<p class="my-speed">Скорость:</p>
		        	<p class="my-mbit">150 Мбит/с</p>
		        </div>
		        <div class="my-internet-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl">500 &#8381;/месяц</p>
		        </div>
		        <div class="my-internet-buttons">
					<?php
						Modal::begin([
					 'header' => '<h2>Hello world</h2>',
					 'toggleButton' => [
					 'label' => 'Подробнее',
					 'tag' => 'button',
					 'class' => 'btn my-btn-default',
					 ],
					 'footer' => 'Низ окна',
					]);
						Modal::end();
					?>		        	
					<div><a href="#" class="btn my-btn-primary" role="button">Подключиться</a></div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div id="my-index-tv">
		<div class="my-tv">Космическое телевидение</div>
		<div class="row">
			<div class="my-tariff col-xs-12 col-sm-7 col-md-4 col-lg-2">
		    <div class="thumbnail">
		      <img src="images/tariffs/zemlyane.svg" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-tv-caption">
		        <h4 class="my-tariff-name">"Земляне"</h4>
		        <div class="my-tv-param">
		        	<p class="my-tv-channel">80 каналов</p>
		        	<p class="my-archive">72 часа архива</p>
		        </div>
		        <div class="my-tv-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl">80 &#8381;/месяц</p>
		        </div>
		        <div class="my-tv-buttons">
		        	<?php
						Modal::begin([
					 'header' => '<h2>Hello world</h2>',
					 'toggleButton' => [
					 'label' => 'Подробнее',
					 'tag' => 'button',
					 'class' => 'btn my-btn-default',
					 ],
					 'footer' => 'Низ окна',
					]);
						Modal::end();
					?>
		        	<div><a href="#" class="btn my-btn-primary" role="button">Подключиться</a></div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-7 col-md-4 col-lg-2">
		    <div class="thumbnail">
		      <img src="images/tariffs/marsiane.png" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-tv-caption">
		        <h4 class="my-tariff-name">"Марсиане"</h4>
		        <div class="my-tv-param">
		        	<p class="my-tv-channel">200 каналов</p>
		        	<p class="my-archive">72 часа архива</p>
		        </div>
		        <div class="my-tv-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl">200 &#8381;/месяц</p>
		        </div>
		        <div class="my-tv-buttons">
		        	<?php
						Modal::begin([
					 'header' => '<h2>Hello world</h2>',
					 'toggleButton' => [
					 'label' => 'Подробнее',
					 'tag' => 'button',
					 'class' => 'btn my-btn-default',
					 ],
					 'footer' => 'Низ окна',
					]);
						Modal::end();
					?>
		        	<div><a href="#" class="btn my-btn-primary" role="button">Подключиться</a></div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div id="my-index-packet">
	<div class="my-packet">Космические пакеты</div>
		<div class="row">
			<div class="my-tariff col-xs-12 col-sm-7 col-md-4 col-lg-2">
		    <div class="thumbnail">
		      <img src="images/tariffs/nevesomost.png" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-packet-caption">
		        <h4 class="my-tariff-name">"Невесомость"</h4>
		        <div class="my-packet-param">
		        	<p class="my-speed">50 Мбит/с</p>
		        	<p class="my-tv-channel">80 каналов</p>
		        	<p class="my-archive">48 часов архива</p>
		        </div>
		        <div class="my-packet-cost">
		        	<!-- <p class="my-cost-cost">Стоимость тарифа:</p> -->
		        	<p class="my-cost-rubl">300 &#8381;/месяц</p>
		        </div>
		        <div class="my-packet-buttons">
		        	<?php
						Modal::begin([
					 'header' => '<h2>Hello world</h2>',
					 'toggleButton' => [
					 'label' => 'Подробнее',
					 'tag' => 'button',
					 'class' => 'btn my-btn-default',
					 ],
					 'footer' => 'Низ окна',
					]);
						Modal::end();
					?>
		        	<div><a href="#" class="btn my-btn-primary" role="button">Подключиться</a></div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-7 col-md-4 col-lg-2">
		    <div class="thumbnail">
		      <img src="images/tariffs/galaktika.png" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-packet-caption">
		        <h4 class="my-tariff-name">"Галактика"</h4>
		        <div class="my-packet-param">
		        	<p class="my-speed">100 Мбит/с</p>
		        	<p class="my-tv-channel">20 каналов</p>
		        	<p class="my-archive">72 часа архива</p>
		        </div>
		        <div class="my-packet-cost">
		        	<!-- <p class="my-cost-cost">Стоимость тарифа:</p> -->
		        	<p class="my-cost-rubl">450 &#8381;/месяц</p>
		        </div>
		        <div class="my-packet-buttons">
		        	<?php
						Modal::begin([
					 'header' => '<h2>Hello world</h2>',
					 'toggleButton' => [
					 'label' => 'Подробнее',
					 'tag' => 'button',
					 'class' => 'btn my-btn-default',
					 ],
					 'footer' => 'Низ окна',
					]);
						Modal::end();
					?>
		        	<div><a href="#" class="btn my-btn-primary" role="button">Подключиться</a></div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
<?php $this->beginBody() ?>
<script src="//unpkg.com/@textback/notification-widget@latest/build/index.js"></script>
<tb-notification-widget  widget-id=190f222f-89e9-b092-39df-016bb8e2b03d></tb-notification-widget>