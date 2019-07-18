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

    public static function tariff_detail($argument)
    {
        switch ($argument)
        {
            case 'lunohod':
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
                break;
            case 'raketa':
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
                break;
            case 'kosmolet':
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
                break;
            case 'zemlyane':
                echo "<div class='my-modal-tv-body'>
                        Пакет из 80 популярных каналов - всего за 80 рублей в месяц!<br>
                            - Управление просмотром с функциями паузы, перемотки и записи трансляции<br>
                            - Архивация эфира на 72 часа<br>
                            - Возможность подключать USB-накопители (флеш-карты и внешние жесткие диски) и просматривать фотографии и другие файлы<br>
                            - Один пульт на ТВ и приставку (с функцией программирования кнопок)<br>
                            - возможность подключения к любому телевизору<br>
                            - IVI, YOUTUBE и YOUTUBE KIDS уже в вашем телевизоре.<br>
                      </div>";
                break;
            case 'marsiane':
                echo "
                <div class='my-modal-tv-body'>
                    Пакет из 200 популярных каналов - всего за 230 рублей в месяц!<br>
                    - Управление просмотром с функциями паузы, перемотки и записи трансляции<br>
                    - Архивация эфира на 72 часа<br>
                    - Возможность подключать USB-накопители (флеш-карты и внешние жесткие диски) и просматривать фотографии и другие файлы<br>
                    - Один пульт на ТВ и приставку (с функцией программирования кнопок)<br>
                    - возможность подключения к любому телевизору<br>
                    - IVI, YOUTUBE и YOUTUBE KIDS уже в вашем телевизоре.<br>
                </div>";
                break;
            case 'nevesomost':
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
                break;
            case 'galaktika':
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
                break;
        }
    }
    public static function perevod($argument)
    {
        switch ($argument) {
            case 'lunohod':
                $name = Tariffs::$name['0'];
                $speed = Tariffs::$speed['0'];
                $cost = Tariffs::$cost['0'];
                return [$name, $speed, $cost];
                break;
            case 'raketa':
                $name = Tariffs::$name['1'];
                $speed = Tariffs::$speed['1'];
                $cost = Tariffs::$cost['1'];
                return [$name, $speed, $cost];
                break;
            case 'kosmolet':
                $name = Tariffs::$name['2'];
                $speed = Tariffs::$speed['2'];
                $cost = Tariffs::$cost['2'];
                return [$name, $speed, $cost];
                break;
            case 'zemlyane':
                $name = Tariffs::$name['3'];
                $cost = Tariffs::$cost['3'];
                $channels = Tariffs::$channels['0'];
                $archive = Tariffs::$archive['1'];
                return [$name, $channels, $archive, $cost];
            case 'marsiane':
                $name = Tariffs::$name['4'];
                $cost = Tariffs::$cost['4'];
                $channels = Tariffs::$channels['1'];
                $archive = Tariffs::$archive['1'];
                return [$name, $channels, $archive, $cost];
            case 'nevesomost':
                $name = Tariffs::$name['5'];
                $speed = Tariffs::$speed['0'];
                $channels = Tariffs::$channels['0'];
                $archive = Tariffs::$archive['0'];
                $cost = Tariffs::$cost['5'];
                return [$name, $speed, $channels, $archive, $cost];
            case 'galaktika':
                $name = Tariffs::$name['6'];
                $speed = Tariffs::$speed['1'];
                $channels = Tariffs::$channels['1'];
                $archive = Tariffs::$archive['1'];
                $cost = Tariffs::$cost['6'];
                return [$name, $speed, $channels, $archive, $cost];
        }
    }
}