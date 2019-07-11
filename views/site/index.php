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
		  <div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-2">
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
							]);
							?>
							<table class="my-tariff-table">
								<thead>
									<th>Услуга</th>
									<th>Характеристика</th>
								</thead>
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
									<td>VIP-подключение</td>
									<td>1000 &#8381</td>
								</tr>
								<tr>
									<td>Wi-Fi роутер</td>
									<td>аренда 50&#8381/мес<br>рассрочка на 3-6 мес.</td>
								</tr>
								<tr>
									<td>Настройка оборудования</td>
									<td>бесплатно</td>
								</tr>
							</table>
							<div class="my-modal-internet-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
							</div>
							<?php
						Modal::end();
						Modal::begin([
							'bodyOptions' => [
								'class' => 'my-modal-connect',
							],
							'header' => '<h2 class="my-modal-header">Заявка на подключение</h2>',
							'toggleButton' => [
								'label' => 'Подключиться',
								'tag' => 'button',
								'class' => 'btn my-btn-success',
								],
							]);
                        $model = new ContactForm();
                        echo $this->render('test', [
                                'model' => $model
                        ]);
						Modal::end();
					?>
		        	<!-- <div><a href="#" class="btn my-btn-primary" role="button">Подключиться</a></div> -->
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-2">
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
							'bodyOptions' => [
								'class' => 'my-modal-internet',
							],
							'header' => '<h2 class="my-modal-header">Тарифный план "Ракета"</h2>',
							'toggleButton' => [
							'label' => 'Подробнее',
							'tag' => 'button',
							'class' => 'btn my-btn-default',
							],
							]);
							?>
							<table class="my-tariff-table">
								<thead>
									<th>Услуга</th>
									<th>Характеристика</th>
								</thead>
								<tr>
									<td>Абонентская плата</td>
									<td>400 &#8381/мес</td>
								</tr>
								<tr>
									<td>Скорость доступа</td>
									<td>до 100 Мбит/с</td>
								</tr>
								<tr>
									<td>Подключение</td>
									<td>бесплатно</td>
								</tr>
								<tr>
									<td>VIP-подключение</td>
									<td>1000 &#8381</td>
								</tr>
								<tr>
									<td>Wi-Fi роутер</td>
									<td>аренда 50&#8381/мес<br>рассрочка на 3-6 мес.</td>
								</tr>
								<tr>
									<td>Настройка оборудования</td>
									<td>бесплатно</td>
								</tr>
							</table>
							<div class="my-modal-internet-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
							</div>
							<?php
						Modal::end();
					?>
		        	<div><a href="#" class="btn my-btn-primary" role="button">Подключиться</a></div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-2">
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
							'bodyOptions' => [
								'class' => 'my-modal-internet',
							],
							'header' => '<h2 class="my-modal-header">Тарифный план "Космолёт"</h2>',
							'toggleButton' => [
							'label' => 'Подробнее',
							'tag' => 'button',
							'class' => 'btn my-btn-default',
							],
							]);
							?>
							<table class="my-tariff-table">
								<thead>
									<th>Услуга</th>
									<th>Характеристика</th>
								</thead>
								<tr>
									<td>Абонентская плата</td>
									<td>500 &#8381/мес</td>
								</tr>
								<tr>
									<td>Скорость доступа</td>
									<td>до 150 Мбит/с</td>
								</tr>
								<tr>
									<td>Подключение</td>
									<td>бесплатно</td>
								</tr>
								<tr>
									<td>VIP-подключение</td>
									<td>1000 &#8381</td>
								</tr>
								<tr>
									<td>Wi-Fi роутер</td>
									<td>аренда 50&#8381/мес<br>рассрочка на 3-6 мес.</td>
								</tr>
								<tr>
									<td>Настройка оборудования</td>
									<td>бесплатно</td>
								</tr>
							</table>
							<div class="my-modal-internet-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
							</div>
							<?php
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
			<div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-2">
		    <div class="thumbnail">
		      <img src="images/tariffs/zemlyane.svg" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-tv-caption">
		        <h4 class="my-tariff-name">"Земляне"</h4>
		        <div class="my-tv-param">
		        	<p class="my-tv-channel">80 каналов</p>
		        	<p class="my-tv-archive">72 часа архива</p>
		        </div>
		        <div class="my-tv-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl">80 &#8381;/месяц</p>
		        </div>
		        <div class="my-tv-buttons">
		        	<?php
						Modal::begin([
							'bodyOptions' => [
								'class' => 'my-modal-tv',
							],
							'header' => '<h2 class="my-modal-header">Тарифный план "Земляне"</h2>',
							'toggleButton' => [
							'label' => 'Подробнее',
							'tag' => 'button',
							'class' => 'btn my-btn-default',
							],
							]);
							?>
							<div class="my-modal-tv-body">
								Пакет из 80 популярных каналов - всего за 80 рублей в месяц!<br>
								- Управление просмотром с функциями паузы, перемотки и записи трансляции<br>
								- Архивация эфира на 72 часа<br>
								- Возможность подключать USB-накопители (флеш-карты и внешние жесткие диски) и просматривать фотографии и другие файлы<br>
								- Один пульт на ТВ и приставку (с функцией программирования кнопок)<br>
								- возможность подключения к любому телевизору<br>
								- IVI, YOUTUBE и YOUTUBE KIDS уже в вашем телевизоре.<br>
							</div>
							<div class="my-modal-tv-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Для предоставления услуги необходим доступ в интернетчерез любого провайдера, рекомендуется не менее 10Мбит/с
							</div>
							<?php
						Modal::end();
					?>
		        	<div><a href="#" class="btn my-btn-primary" role="button">Подключиться</a></div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-2">
		    <div class="thumbnail">
		      <img src="images/tariffs/marsiane.png" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-tv-caption">
		        <h4 class="my-tariff-name">"Марсиане"</h4>
		        <div class="my-tv-param">
		        	<p class="my-tv-channel">200 каналов</p>
		        	<p class="my-tv-archive">72 часа архива</p>
		        </div>
		        <div class="my-tv-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl">200 &#8381;/месяц</p>
		        </div>
		        <div class="my-tv-buttons">
		        	<?php
						Modal::begin([
							'bodyOptions' => [
								'class' => 'my-modal-tv',
							],
							'header' => '<h2 class="my-modal-header">Тарифный план "Марсиане"</h2>',
							'toggleButton' => [
							'label' => 'Подробнее',
							'tag' => 'button',
							'class' => 'btn my-btn-default',
							],
							]);
							?>
							<div class="my-modal-tv-body">
								Пакет из 200 популярных каналов - всего за 230 рублей в месяц!<br>
								- Управление просмотром с функциями паузы, перемотки и записи трансляции<br>
								- Архивация эфира на 72 часа<br>
								- Возможность подключать USB-накопители (флеш-карты и внешние жесткие диски) и просматривать фотографии и другие файлы<br>
								- Один пульт на ТВ и приставку (с функцией программирования кнопок)<br>
								- возможность подключения к любому телевизору<br>
								- IVI, YOUTUBE и YOUTUBE KIDS уже в вашем телевизоре.<br>
							</div>
							<div class="my-modal-tv-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Для предоставления услуги необходим доступ в интернет через любого провайдера, рекомендуется не менее 10Мбит/с
							</div>
							<?php
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
			<div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-2">
		    <div class="thumbnail">
		      <img src="images/tariffs/nevesomost.png" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-packet-caption">
		        <h4 class="my-tariff-name">"Невесомость"</h4>
		        <div class="my-packet-param">
		        	<p class="my-speed">50 Мбит/с</p>
		        	<p class="my-tv-channel">80 каналов</p>
		        	<p class="my-tv-archive">48 часов архива</p>
		        </div>
		        <div class="my-packet-cost">
		        	<!-- <p class="my-cost-cost">Стоимость тарифа:</p> -->
		        	<p class="my-cost-rubl">300 &#8381;/месяц</p>
		        </div>
		        <div class="my-packet-buttons">
		        	<?php
						Modal::begin([
							'bodyOptions' => [
								'class' => 'my-modal-packet',
							],
							'header' => '<h2 class="my-modal-header">Тарифный план "Невесомость"</h2>',
							'toggleButton' => [
							'label' => 'Подробнее',
							'tag' => 'button',
							'class' => 'btn my-btn-default',
							],
							]);
							?>
							<table class="my-tariff-table">
								<thead>
									<th>Услуга</th>
									<th>Характеристика</th>
								</thead>
								<tr>
									<td>Абонентская плата</td>
									<td>300 &#8381/мес</td>
								</tr>
								<tr>
									<td>Скорость доступа</td>
									<td>до 50 Мбит/с</td>
								</tr>
								<tr>
									<td>Количество каналов</td>
									<td>80</td>
								</tr>
								<tr>
									<td>Подключение</td>
									<td>бесплатно</td>
								</tr>
								<tr>
									<td>VIP-подключение</td>
									<td>1000 &#8381</td>
								</tr>
								<tr>
									<td>Wi-Fi роутер</td>
									<td>аренда 50&#8381/мес<br>рассрочка на 3-6 мес.</td>
								</tr>
								<tr>
									<td>TV-приставки:</td>
									<td></td>
								</tr>
								<tr>
									<td>TVIP S.110</td>
									<td>аренда - 20&#8381/мес</td>
								</tr>
								<tr>
									<td>TVIP S.605</td>
									<td>рассрочка 20 мес. - 200 &#8381<br>
									покупка - 4000 &#8381</td>
								</tr>
								<tr>
									<td>Настройка оборудования</td>
									<td>бесплатно</td>
								</tr>
								<tr>
									<td>Архив телепередач</td>
									<td>72 часа</td>
								</tr>
							</table>
							<div class="my-modal-internet-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
							</div>
							<?php
						Modal::end();
					?>
		        	<div><a href="#" class="btn my-btn-primary" role="button">Подключиться</a></div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-2">
		    <div class="thumbnail">
		      <img src="images/tariffs/galaktika.png" class="col-xs-5 col-sm-5 col-md-6 col-xl-6">
		      <div class="my-packet-caption">
		        <h4 class="my-tariff-name">"Галактика"</h4>
		        <div class="my-packet-param">
		        	<p class="my-speed">100 Мбит/с</p>
		        	<p class="my-tv-channel">20 каналов</p>
		        	<p class="my-tv-archive">72 часа архива</p>
		        </div>
		        <div class="my-packet-cost">
		        	<!-- <p class="my-cost-cost">Стоимость тарифа:</p> -->
		        	<p class="my-cost-rubl">450 &#8381;/месяц</p>
		        </div>
		        <div class="my-packet-buttons">
		        	<?php
						Modal::begin([
							'bodyOptions' => [
								'class' => 'my-modal-internet',
							],
							'header' => '<h2 class="my-modal-header">Тарифный план "Галактика"</h2>',
							'toggleButton' => [
							'label' => 'Подробнее',
							'tag' => 'button',
							'class' => 'btn my-btn-default',
							],
							]);
							?>
							<table class="my-tariff-table">
								<thead>
									<th>Услуга</th>
									<th>Характеристика</th>
								</thead>
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
									<td>VIP-подключение</td>
									<td>1000 &#8381</td>
								</tr>
								<tr>
									<td>Wi-Fi роутер</td>
									<td>аренда 50&#8381/мес<br>рассрочка на 3-6 мес.</td>
								</tr>
								<tr>
									<td>Настройка оборудования</td>
									<td>бесплатно</td>
								</tr>
								<tr>
									<td>Архив телепередач</td>
									<td>72 часа</td>
								</tr>
							</table>
							<div class="my-modal-internet-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
							</div>
							<?php
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