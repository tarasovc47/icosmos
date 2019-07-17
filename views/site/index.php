<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;
use app\models\ContactForm;
use yii\captcha\Captcha;
use app\models\Tariffs;

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
	 'content' => '<img src="images/podlozhka1v2.png" alt=""/>',
	 'caption' => '<h3>Заголовок1</h3><p>Какой-то дополнительный текст</p><p><a href="/" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
	 'options' => []
	 ],
	 [
	 'content' => '<img src="images/podlozhka2v2.png" alt=""/>',
	 'caption' => '<h3>Заголовок2</h3><p>Какой-то дополнительный текст</p><p><a href="/" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
	 'options' => []
	 ],
	 [
	 'content' => '<img src="images/podlozhka3v2.png" alt=""/>',
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
    <div class="modal fade" id="my-modal-arsenalpay">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div id='arsenalpay-widget'></div>
                    <script src='https://arsenalpay.ru/widget/script.js'></script>
                    <script>
                        let widget = new ArsenalpayWidget();
                        widget.element = 'arsenalpay-widget';
                        widget.widget = 674;
                        widget.render();
                    </script>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="my-index-internet">
		<div class="my-internet">Космический интернет</div>
		<div class="row">
		  <div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-3">
		    <div class="thumbnail">
		      <img src="images/tariffs/lunohod.png" alt="" class="col-xs-5 col-sm-5 col-md-6 col-lg-6">
		      <div class="my-internet-caption">
		        <h4 class="my-tariff-name"><?= Tariffs::$name[0]?></h4>
		        <div class="my-internet-param">
		        	<p class="my-speed">Скорость:</p>
		        	<p class="my-mbit"><?= Tariffs::$speed[0]?></p>
		        </div>
		        <div class="my-internet-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl"><?= Tariffs::$cost[0]?></p>
		        </div>
		        <div class="my-internet-buttons">
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
                            'footer' => '
                                <div class="my-modal-internet-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
							    </div>',
							]);
							echo Tariffs::lunohod_detail();
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
                        echo ContactForm::actionMail();
						Modal::end();
					?>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-3">
		    <div class="thumbnail">
		      <img src="images/tariffs/raketa.png" alt="" class="col-xs-5 col-sm-5 col-md-6 col-lg-6">
		      <div class="my-internet-caption">
		        <h4 class="my-tariff-name"><?= Tariffs::$name[1]?></h4>
		        <div class="my-internet-param">
		        	<p class="my-speed">Скорость:</p>
		        	<p class="my-mbit"><?= Tariffs::$speed[1]?></p>
		        </div>
		        <div class="my-internet-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl"><?= Tariffs::$cost[1]?></p>
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
                            'footer' => '
                            <div class="my-modal-internet-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
							</div>
                            '
							]);
						    echo Tariffs::raketa_detail();
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
                        echo ContactForm::actionMail();
						Modal::end();?>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-3">
		    <div class="thumbnail">
		      <img src="images/tariffs/kosmolet.svg" alt="" class="col-xs-5 col-sm-5 col-md-6 col-lg-6">
		      <div class="my-internet-caption">
		        <h4 class="my-tariff-name"><?= Tariffs::$name[2]?></h4>
		        <div class="my-internet-param">
		        	<p class="my-speed">Скорость:</p>
		        	<p class="my-mbit"><?= Tariffs::$speed[2]?></p>
		        </div>
		        <div class="my-internet-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl"><?= Tariffs::$cost[2]?></p>
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
                            'footer' => '
                            <div class="my-modal-internet-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
							</div>
                            '
							]);
						    echo Tariffs::kosmolet_detail();
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
                        echo ContactForm::actionMail();
                        Modal::end();?>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div id="my-index-tv">
		<div class="my-tv">Космическое телевидение</div>
		<div class="row">
			<div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-3">
		    <div class="thumbnail">
		      <img src="images/tariffs/zemlyane.svg" alt="" class="col-xs-5 col-sm-5 col-md-6 col-lg-6">
		      <div class="my-tv-caption">
		        <h4 class="my-tariff-name"><?= Tariffs::$name[3]?></h4>
		        <div class="my-tv-param">
		        	<p class="my-tv-channel"><?= Tariffs::$channels[0]?></p>
		        	<p class="my-tv-archive"><?= Tariffs::$archive[1]?></p>
		        </div>
		        <div class="my-tv-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl"><?= Tariffs::$cost[3]?></p>
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
                            'footer' => '
                            <div class="my-modal-tv-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Для предоставления услуги необходим доступ в интернетчерез любого провайдера, рекомендуется не менее 10Мбит/с
							</div>
                            '
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
                        echo ContactForm::actionMail();
                        Modal::end();?>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-3">
		    <div class="thumbnail">
		      <img src="images/tariffs/marsiane.png" alt="" class="col-xs-5 col-sm-5 col-md-6 col-lg-6">
		      <div class="my-tv-caption">
		        <h4 class="my-tariff-name"><?= Tariffs::$name[4]?></h4>
		        <div class="my-tv-param">
		        	<p class="my-tv-channel"><?= Tariffs::$channels[1]?></p>
		        	<p class="my-tv-archive"><?= Tariffs::$archive[1]?></p>
		        </div>
		        <div class="my-tv-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl"><?= Tariffs::$cost[4]?></p>
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
                            'footer' => '
                            <div class="my-modal-tv-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Для предоставления услуги необходим доступ в интернет через любого провайдера, рекомендуется не менее 10Мбит/с
							</div>
                            '
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
                        echo ContactForm::actionMail();
                        Modal::end();?>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div id="my-index-packet">
	<div class="my-packet">Космические пакеты</div>
		<div class="row">
			<div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-3">
		    <div class="thumbnail">
		      <img src="images/tariffs/nevesomost.png" alt="" class="col-xs-5 col-sm-5 col-md-6 col-lg-6">
		      <div class="my-packet-caption">
		        <h4 class="my-tariff-name"><?= Tariffs::$name[5]?></h4>
		        <div class="my-packet-param">
		        	<p class="my-speed"><?= Tariffs::$speed[0]?></p>
		        	<p class="my-tv-channel"><?= Tariffs::$channels[0]?></p>
		        	<p class="my-tv-archive"><?= Tariffs::$archive[0]?></p>
		        </div>
		        <div class="my-packet-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl"><?= Tariffs::$cost[5]?></p>
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
                            'footer' => '
                            <div class="my-modal-internet-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
							</div>
                            '
							]);
						    echo Tariffs::nevesomost_detail();
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
                        echo ContactForm::actionMail();
                        Modal::end();?>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-3">
		    <div class="thumbnail">
		      <img src="images/tariffs/galaktika.png" alt="" class="col-xs-5 col-sm-5 col-md-6 col-lg-6">
		      <div class="my-packet-caption">
		        <h4 class="my-tariff-name"><?= Tariffs::$name[6]?></h4>
		        <div class="my-packet-param">
		        	<p class="my-speed"><?= Tariffs::$speed[1]?></p>
		        	<p class="my-tv-channel"><?= Tariffs::$channels[1]?></p>
		        	<p class="my-tv-archive"><?= Tariffs::$archive[1]?></p>
		        </div>
		        <div class="my-packet-cost">
		        	<p class="my-cost-cost">Стоимость тарифа:</p>
		        	<p class="my-cost-rubl"><?= Tariffs::$cost[6]?></p>
		        </div>
		        <div class="my-packet-buttons">
		        	<?php
						Modal::begin([
							'bodyOptions' => [
								'class' => 'my-modal-packet',
							],
							'header' => '<h2 class="my-modal-header">Тарифный план "Галактика"</h2>',
							'toggleButton' => [
							'label' => 'Подробнее',
							'tag' => 'button',
							'class' => 'btn my-btn-default',
							],
                            'footer' => '
                            <div class="my-modal-internet-footer">
								<i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
								Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
							</div>
                            '
							]);
						    echo Tariffs::galaktika_detail();
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
                        echo ContactForm::actionMail();
                        Modal::end();?>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
<?php $this->beginBody() ?>
<script src="//unpkg.com/@textback/notification-widget@latest/build/index.js"></script>
<tb-notification-widget  widget-id=190f222f-89e9-b092-39df-016bb8e2b03d></tb-notification-widget>