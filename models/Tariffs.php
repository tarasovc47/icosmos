<?php


namespace app\models;


use yii\base\Model;

class Tariff_Modals extends Model
{
    public static $tariff_lunohod = [
        'tariff_name' => 'Луноход',
        'tariff_cost' => '300&#8381/мес.',
        'tariff_speed' => 'до 50 Мбит/с',
        'tariff_connect' => 'бесплатно',
        'tariff_VIPconnect' => '1000&#8381'
        /*'Луноход', 'Ракета', 'Космолёт', 'Земляне', 'Марсиане', 'Невесомость', 'Галактика',*/
    ];

}