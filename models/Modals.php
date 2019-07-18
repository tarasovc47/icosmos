<?php


namespace app\models;


use app\models\Tariffs;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;

class Modals
{
    /**
     * @param $argument
     */
    public static function renderModal_internet($argument)
    {
        Modal::begin([
            'bodyOptions' => [
                'class' => 'my-modal-internet',
            ],
            'header' => "<h2>Тарифный план \"".ArrayHelper::getValue(Tariffs::perevod($argument), '0')."\"</h2>",
            'toggleButton' => [
                'label' => 'Подробнее',
                'tag' => 'button',
                'class' => 'btn my-btn-default',
            ],
            'footer' => '<div class="my-modal-internet-footer">
                            <i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
                            Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
                        </div>',
        ]);
        echo Tariffs::tariff_detail($argument);
        Modal::end();
        Modal::begin([
            'bodyOptions' => [
                'class' => 'my-modal-connect',
            ],
            'header' => '',
            'toggleButton' => [
                'label' => 'Подключиться',
                'tag' => 'button',
                'class' => 'btn my-btn-success',
            ],
        ]);
        ContactForm::actionMail();
        Modal::end();
    }
    public static function renderModal_tv($argument)
    {
        Modal::begin([
            'bodyOptions' => [
                'class' => 'my-modal-tv',
            ],
            'header' => "<h2>Тарифный план \"".ArrayHelper::getValue(Tariffs::perevod($argument), '0')."\"</h2>",
            'toggleButton' => [
                'label' => 'Подробнее',
                'tag' => 'button',
                'class' => 'btn my-btn-default',
            ],
            'footer' => '<div class="my-modal-tv-footer">
                            <i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
                            Для предоставления услуги необходим доступ в интернет через любого провайдера, рекомендуется не менее 10Мбит/с
                        </div>',
        ]);
        echo Tariffs::tariff_detail($argument);
        Modal::end();
        Modal::begin([
            'bodyOptions' => [
                'class' => 'my-modal-connect',
            ],
            'header' => '',
            'toggleButton' => [
                'label' => 'Подключиться',
                'tag' => 'button',
                'class' => 'btn my-btn-success',
            ],
        ]);
        ContactForm::actionMail();
        Modal::end();
    }
    public static function renderModal_packet($argument)
    {
        Modal::begin([
            'bodyOptions' => [
                'class' => 'my-modal-packet',
            ],
            'header' => "<h2>Тарифный план \"".ArrayHelper::getValue(Tariffs::perevod($argument), '0')."\"</h2>",
            'toggleButton' => [
                'label' => 'Подробнее',
                'tag' => 'button',
                'class' => 'btn my-btn-default',
            ],
            'footer' => '<div class="my-modal-packet-footer">
                            <i>При единовременной оплате услуг за 1 год предоставляется скидка 15%</i><br>
                            Наличие технической возможности подключения уточняйте по телефону +7(3452)21-88-88 или на сайте в разделе заявка на подключение
                        </div>',
        ]);
        echo Tariffs::tariff_detail($argument);
        Modal::end();
        Modal::begin([
            'bodyOptions' => [
                'class' => 'my-modal-connect',
            ],
            'header' => '',
            'toggleButton' => [
                'label' => 'Подключиться',
                'tag' => 'button',
                'class' => 'btn my-btn-success',
            ],
        ]);
        ContactForm::actionMail();
        Modal::end();
    }
}