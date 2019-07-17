<?php


namespace app\models;


use yii\helpers\ArrayHelper;

class Tariffs
{
    public static $name =
        [
            'Луноход',
            'Ракета',
            'Космолёт',
            'Земляне',
            'Марсиане',
            'Невесомость',
            'Галактика',
        ];
    public static $cost =
        [
            '300 &#8381/мес.',
            '400 &#8381/мес.',
            '500 &#8381/мес.',
            '80 &#8381/мес.',
            '200 &#8381/мес.',
            '300 &#8381/мес.',
            '450 &#8381/мес.',
        ];
    public static $speed =
        [
            'до 50 Мбит/с',
            'до 100 Мбит/с',
            'до 150 Мбит/с',
        ];
    public static $channels =
        [
            '80 каналов',
            '200 каналов'
        ];
    public static $connect = ['бесплатно'];
    public static $vipconnect = ['1000 &#8381'];
    public static $hardware_arenda =
        [
            'аренда 50&#8381/мес.',
            'аренда 20&#8381/мес.',
        ];
    public static $hardware_rent =
        [
            'рассрочка на 3-6 мес.',
            'рассрочка на 20 мес. - 200&#8381',
        ];
    public static $hardware_buy = ['покупка - 4000&#8381',];
    public static $tune = ['бесплатно'];
    public static $archive =
        [
            '48 часов архива',
            '72 часа архива'
        ];

    public static function lunohod_detail()
    {
        $tariff_name = ArrayHelper::getValue(Tariffs::$name, '0');
        $tariff_cost = ArrayHelper::getValue(Tariffs::$cost, '0');
        $tariff_speed = ArrayHelper::getValue(Tariffs::$speed, '0');
        $tariff_connect = ArrayHelper::getValue(Tariffs::$connect, '0');
        $tariff_vipconnect = ArrayHelper::getValue(Tariffs::$vipconnect, '0');
        $tariff_hardware_rent = ArrayHelper::getValue(Tariffs::$hardware_rent, '0');
        $tariff_tune = ArrayHelper::getValue(Tariffs::$tune, '0');
        $tariff_result = "
        <table class='my-tariff-table'>
            <thead>
            <th>Услуга</th>
            <th>Характеристика</th>
            </thead>
            <tr>
                <td>Абонентская плата</td>
                <td>".$tariff_cost."</td>
            </tr>
            <tr>
                <td>Скорость доступа</td>
                <td>".$tariff_speed."</td>
            </tr>
            <tr>
                <td>Подключение</td>
                <td>".$tariff_connect."</td>
            </tr>
            <tr>
                <td>VIP-подключение</td>
                <td>".$tariff_vipconnect."</td>
            </tr>
            <tr>
                <td>Wi-Fi роутер</td>
                <td>".$tariff_hardware_rent."</td>
            </tr>
            <tr>
                <td>Настройка оборудования</td>
                <td>".$tariff_tune."</td>
            </tr>
        </table>";
        return $tariff_result;
    }
    public static function raketa_detail()
    {
        $tariff_name = ArrayHelper::getValue(Tariffs::$name, '1');
        $tariff_cost = ArrayHelper::getValue(Tariffs::$cost, '1');
        $tariff_speed = ArrayHelper::getValue(Tariffs::$speed, '1');
        $tariff_connect = ArrayHelper::getValue(Tariffs::$connect, '0');
        $tariff_vipconnect = ArrayHelper::getValue(Tariffs::$vipconnect, '0');
        $tariff_hardware_arenda_wifi = ArrayHelper::getValue(Tariffs::$hardware_arenda, '0');
        $tariff_hardware_rent_wifi = ArrayHelper::getValue(Tariffs::$hardware_rent, '0');
        $tariff_tune = ArrayHelper::getValue(Tariffs::$tune, '0');
        $tariff_result = "
        <table class='my-tariff-table'>
            <thead>
                <th>Услуга</th>
                <th>Характеристика</th>
            </thead>
            <tr>
                <td>Абонентская плата</td>
                <td>".$tariff_cost."</td>
            </tr>
            <tr>
                <td>Скорость доступа</td>
                <td>".$tariff_speed."</td>
            </tr>
            <tr>
                <td>Подключение</td>
                <td>".$tariff_connect."</td>
            </tr>
            <tr>
                <td>VIP-подключение</td>
                <td>".$tariff_vipconnect."</td>
            </tr>
            <tr>
                <td>Wi-Fi роутер</td>
                <td>".$tariff_hardware_arenda_wifi."<br>".$tariff_hardware_rent_wifi."</td>
            </tr>
            <tr>
                <td>Настройка оборудования</td>
                <td>".$tariff_tune."</td>
            </tr>
        </table>";
        return $tariff_result;
    }
    public static function kosmolet_detail()
    {
        $tariff_name = ArrayHelper::getValue(Tariffs::$name, '2');
        $tariff_cost = ArrayHelper::getValue(Tariffs::$cost, '2');
        $tariff_speed = ArrayHelper::getValue(Tariffs::$speed, '2');
        $tariff_connect = ArrayHelper::getValue(Tariffs::$connect, '0');
        $tariff_vipconnect = ArrayHelper::getValue(Tariffs::$vipconnect, '0');
        $tariff_hardware_arenda_wifi = ArrayHelper::getValue(Tariffs::$hardware_arenda, '0');
        $tariff_hardware_rent_wifi = ArrayHelper::getValue(Tariffs::$hardware_rent, '0');
        $tariff_tune = ArrayHelper::getValue(Tariffs::$tune, '0');
        $tariff_result = "
        <table class='my-tariff-table'>
            <thead>
                <th>Услуга</th>
                <th>Характеристика</th>
            </thead>
            <tr>
                <td>Абонентская плата</td>
                <td>".$tariff_cost."</td>
            </tr>
            <tr>
                <td>Скорость доступа</td>
                <td>".$tariff_speed."</td>
            </tr>
            <tr>
                <td>Подключение</td>
                <td>".$tariff_connect."</td>
            </tr>
            <tr>
                <td>VIP-подключение</td>
                <td>".$tariff_vipconnect."</td>
            </tr>
            <tr>
                <td>Wi-Fi роутер</td>
                <td>".$tariff_hardware_arenda_wifi."<br>".$tariff_hardware_rent_wifi."</td>
            </tr>
            <tr>
                <td>Настройка оборудования</td>
                <td>".$tariff_tune."</td>
            </tr>
        </table>";
        return $tariff_result;
    }
    public static function nevesomost_detail()
    {
        $tariff_name = ArrayHelper::getValue(Tariffs::$name, '5');
        $tariff_cost = ArrayHelper::getValue(Tariffs::$cost, '5');
        $tariff_channels = ArrayHelper::getValue(Tariffs::$channels, '0');
        $tariff_speed = ArrayHelper::getValue(Tariffs::$speed, '0');
        $tariff_connect = ArrayHelper::getValue(Tariffs::$connect, '0');
        $tariff_vipconnect = ArrayHelper::getValue(Tariffs::$vipconnect, '0');
        $tariff_hardware_arenda_wifi = ArrayHelper::getValue(Tariffs::$hardware_arenda, '0');
        $tariff_hardware_arenda_110 = ArrayHelper::getValue(Tariffs::$hardware_arenda, '1');
        $tariff_hardware_rent_wifi = ArrayHelper::getValue(Tariffs::$hardware_rent, '0');
        $tariff_hardware_rent_605 = ArrayHelper::getValue(Tariffs::$hardware_rent, '0');
        $tariff_hardware_buy = ArrayHelper::getValue(Tariffs::$hardware_buy, '0');
        $tariff_tune = ArrayHelper::getValue(Tariffs::$tune, '0');
        $tariff_archive = ArrayHelper::getValue(Tariffs::$archive,'0');
        $tariff_result = "
        <table class='my-tariff-table'>
            <thead>
                <th>Услуга</th>
                <th>Характеристика</th>
            </thead>
            <tr>
                <td>Абонентская плата</td>
                <td>".$tariff_cost."</td>
            </tr>
            <tr>
                <td>Скорость доступа</td>
                <td>".$tariff_speed."</td>
            </tr>
            <tr>
                <td>Количество каналов</td>
                <td>".$tariff_channels."</td>
            </tr>
            <tr>
                <td>Подключение</td>
                <td>".$tariff_connect."</td>
            </tr>
            <tr>
                <td>VIP-подключение</td>
                <td>".$tariff_vipconnect."</td>
            </tr>
            <tr>
                <td>Wi-Fi роутер</td>
                <td>".$tariff_hardware_arenda_wifi."<br>".$tariff_hardware_rent_wifi."</td>
            </tr>
            <tr>
                <td>TV-приставки:</td>
                <td></td>
            </tr>
            <tr>
                <td>TVIP S.110</td>
                <td>".$tariff_hardware_arenda_110."</td>
            </tr>
            <tr>
                <td>TVIP S.605</td>
                <td>".$tariff_hardware_rent_605."<br>
                ".$tariff_hardware_buy."</td>
            </tr>
            <tr>
                <td>Настройка оборудования</td>
                <td>".$tariff_tune."</td>
            </tr>
            <tr>
                <td>Архив телепередач</td>
                <td>".$tariff_archive."</td>
            </tr>
        </table>";
        return $tariff_result;
    }
    public static function galaktika_detail()
    {
        $tariff_name = ArrayHelper::getValue(Tariffs::$name, '6');
        $tariff_cost = ArrayHelper::getValue(Tariffs::$cost, '6');
        $tariff_channels = ArrayHelper::getValue(Tariffs::$channels, '1');
        $tariff_speed = ArrayHelper::getValue(Tariffs::$speed, '2');
        $tariff_connect = ArrayHelper::getValue(Tariffs::$connect, '0');
        $tariff_vipconnect = ArrayHelper::getValue(Tariffs::$vipconnect, '0');
        $tariff_hardware_arenda_wifi = ArrayHelper::getValue(Tariffs::$hardware_arenda, '0');
        $tariff_hardware_arenda_110 = ArrayHelper::getValue(Tariffs::$hardware_arenda, '1');
        $tariff_hardware_rent_wifi = ArrayHelper::getValue(Tariffs::$hardware_rent, '0');
        $tariff_hardware_rent_605 = ArrayHelper::getValue(Tariffs::$hardware_rent, '0');
        $tariff_hardware_buy = ArrayHelper::getValue(Tariffs::$hardware_buy, '0');
        $tariff_tune = ArrayHelper::getValue(Tariffs::$tune, '0');
        $tariff_archive = ArrayHelper::getValue(Tariffs::$archive,'1');
        $tariff_result = "
        <table class='my-tariff-table'>
            <thead>
                <th>Услуга</th>
                <th>Характеристика</th>
            </thead>
            <tr>
                <td>Абонентская плата</td>
                <td>".$tariff_cost."</td>
            </tr>
            <tr>
                <td>Скорость доступа</td>
                <td>".$tariff_speed."</td>
            </tr>
            <tr>
                <td>Количество каналов</td>
                <td>".$tariff_channels."</td>
            </tr>
            <tr>
                <td>Подключение</td>
                <td>".$tariff_connect."</td>
            </tr>
            <tr>
                <td>VIP-подключение</td>
                <td>".$tariff_vipconnect."</td>
            </tr>
            <tr>
                <td>Wi-Fi роутер</td>
                <td>".$tariff_hardware_arenda_wifi."<br>".$tariff_hardware_rent_wifi."</td>
            </tr>
            <tr>
                <td>TV-приставки:</td>
                <td></td>
            </tr>
            <tr>
                <td>TVIP S.110</td>
                <td>".$tariff_hardware_arenda_110."</td>
            </tr>
            <tr>
                <td>TVIP S.605</td>
                <td>".$tariff_hardware_rent_605."<br>
                ".$tariff_hardware_buy."</td>
            </tr>
            <tr>
                <td>Настройка оборудования</td>
                <td>".$tariff_tune."</td>
            </tr>
            <tr>
                <td>Архив телепередач</td>
                <td>".$tariff_archive."</td>
            </tr>
        </table>";
        return $tariff_result;
    }
}