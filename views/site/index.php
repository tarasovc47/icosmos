<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;
use app\models\ContactForm;
use yii\captcha\Captcha;
use app\models\Tariffs;
use app\models\BlockInternet;
use app\models\BlockTv;
use app\models\BlockPacket;

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
<?php $this->beginBody() ?>
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
            </div>
        </div>
    </div>
    <div id="my-index-internet">
		<div class="my-internet">Космический интернет</div>
		<div class="row">
            <?php
            BlockInternet::renderBlock_internet1('lunohod');
            BlockInternet::render_tariffname('lunohod');
            BlockInternet::renderBlock_internet2();
            BlockInternet::render_tariffspeed('lunohod');
            BlockInternet::renderBlock_internet3();
            BlockInternet::render_tariffcost('lunohod');
            BlockInternet::renderBlock_internet4();
            BlockInternet::echo_modal('lunohod');
            BlockInternet::renderBlock_internet5();
            BlockInternet::renderBlock_internet1('raketa');
            BlockInternet::render_tariffname('raketa');
            BlockInternet::renderBlock_internet2();
            BlockInternet::render_tariffspeed('raketa');
            BlockInternet::renderBlock_internet3();
            BlockInternet::render_tariffcost('raketa');
            BlockInternet::renderBlock_internet4();
            BlockInternet::echo_modal('raketa');
            BlockInternet::renderBlock_internet5();
            BlockInternet::renderBlock_internet1('kosmolet');
            BlockInternet::render_tariffname('kosmolet');
            BlockInternet::renderBlock_internet2();
            BlockInternet::render_tariffspeed('kosmolet');
            BlockInternet::renderBlock_internet3();
            BlockInternet::render_tariffcost('kosmolet');
            BlockInternet::renderBlock_internet4();
            BlockInternet::echo_modal('kosmolet');
            BlockInternet::renderBlock_internet5();
            ?>
	<div id="my-index-tv">
		<div class="my-tv">Космическое телевидение</div>
		<div class="row">
            <?php
            BlockTv::renderBlock_tv1('zemlyane');
            BlockTv::render_tariffname('zemlyane');
            BlockTv::renderBlock_tv2();
            BlockTv::render_tariffchannels('zemlyane');
            BlockTv::renderBlock_tv3();
            BlockTv::render_tariffarchive('zemlyane');
            BlockTv::renderBlock_tv4();
            BlockTv::render_tariffcost('zemlyane');
            BlockTv::renderBlock_tv5();
            BlockTv::echo_modal('zemlyane');
            BlockTv::renderBlock_tv6();
            BlockTv::renderBlock_tv1('marsiane');
            BlockTv::render_tariffname('marsiane');
            BlockTv::renderBlock_tv2();
            BlockTv::render_tariffchannels('marsiane');
            BlockTv::renderBlock_tv3();
            BlockTv::render_tariffarchive('marsiane');
            BlockTv::renderBlock_tv4();
            BlockTv::render_tariffcost('marsiane');
            BlockTv::renderBlock_tv5();
            BlockTv::echo_modal('marsiane');
            BlockTv::renderBlock_tv6();
            ?>
		</div>
	</div>
	<div id="my-index-packet">
	<div class="my-packet">Космические пакеты</div>
		<div class="row">
            <?php
            BlockPacket::renderBlock_packet1('nevesomost');
            BlockPacket::render_tariffname('nevesomost');
            BlockPacket::renderBlock_packet2();
            BlockPacket::render_tariffspeed('nevesomost');
            BlockPacket::renderBlock_packet3();
            BlockPacket::render_tariffchannels('nevesomost');
            BlockPacket::renderBlock_packet4();
            BlockPacket::render_tariffarchive('nevesomost');
            BlockPacket::renderBlock_packet5();
            BlockPacket::render_tariffcost('nevesomost');
            BlockPacket::renderBlock_packet6();
            BlockPacket::echo_modal('nevesomost');
            BlockPacket::renderBlock_packet7();
            BlockPacket::renderBlock_packet1('galaktika');
            BlockPacket::render_tariffname('galaktika');
            BlockPacket::renderBlock_packet2();
            BlockPacket::render_tariffspeed('galaktika');
            BlockPacket::renderBlock_packet3();
            BlockPacket::render_tariffchannels('galaktika');
            BlockPacket::renderBlock_packet4();
            BlockPacket::render_tariffarchive('galaktika');
            BlockPacket::renderBlock_packet5();
            BlockPacket::render_tariffcost('galaktika');
            BlockPacket::renderBlock_packet6();
            BlockPacket::echo_modal('galaktika');
            BlockPacket::renderBlock_packet7();
            ?>
		</div>
	</div>

<script src="//unpkg.com/@textback/notification-widget@latest/build/index.js"></script>
<tb-notification-widget  widget-id=190f222f-89e9-b092-39df-016bb8e2b03d></tb-notification-widget>