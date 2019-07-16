<?php
 namespace app\models;

 use Yii;
 use yii\base\Model;

 class Carousels extends Model
 {
    public static $carousel_first = [
         [
         'content' => '<img src="images/podlozhka7.jpg"/>',
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
    public static $carousel_two = [
         [
             'content' => '
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
                                
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
             ',
             'caption' => '',
         ],
         [
             'content' => '
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
                                
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>',
         ],
         [
             'content' => '
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
		        	<p class="my-cost-rubl">300 &#8381;/месяц</p>
		        </div>
		        <div class="my-packet-buttons">
						
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
		        	<p class="my-cost-rubl">450 &#8381;/месяц</p>
		        </div>
		        <div class="my-packet-buttons">
		        	
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
                ',
         ],
    ];
 }