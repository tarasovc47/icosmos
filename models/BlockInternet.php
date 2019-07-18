<?php


namespace app\models;


use app\models\Tariffs;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;

class BlockInternet
{
    /**
     * @param $argument
     */
    public static function renderBlock_internet1($argument)
    {
        echo "
            <div class='my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-3'>
                <div class='thumbnail'>
                    <img src='images/tariffs/" . $argument . ".png' alt='' class='col-xs-5 col-sm-5 col-md-6 col-lg-6'>
                    <div class='my-internet-caption'>
                        <h4 class='my-tariff-name'>";
    }
    public static function render_tariffname($argument)
    {
        $render_tariffname = ArrayHelper::getValue(Tariffs::perevod($argument), '0');
        echo $render_tariffname;
    }
    public static function renderBlock_internet2()
    {
        echo "</h4>
                    <div class='my-internet-param'>
                        <p class='my-speed'>Скорость:</p>
                        <p class='my-mbit'>";
    }
    public static function render_tariffspeed($argument)
    {
        $render_tariffspeed = ArrayHelper::getValue(Tariffs::perevod($argument), '1');
        echo $render_tariffspeed;
    }
    public static function renderBlock_internet3()
    {
        echo "</p>
                </div>
                    <div class='my-internet-cost'>
                        <p class='my-cost-cost'>Стоимость тарифа:</p>
                        <p class='my-cost-rubl'>";
    }
    public static function render_tariffcost($argument)
    {
        $render_tariffcost = ArrayHelper::getValue(Tariffs::perevod($argument), '2');
        echo $render_tariffcost;
    }
    public static function renderBlock_internet4()
    {
        echo "</p>
                    </div>
                    <div class='my-internet-buttons'>";
    }
    public static function echo_modal($argument)
    {
        Modals::renderModal_internet($argument);
    }
    public static function renderBlock_internet5()
    {
        echo "
                    </div>
                </div>
            </div>
        </div>";
    }
}