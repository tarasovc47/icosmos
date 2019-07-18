<?php


namespace app\models;


use app\models\Tariffs;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;

class BlockTv
{
    /**
     * @param $argument
     */
    public static function renderBlock_tv1($argument)
    {
        echo "
            <div class='my-tariff col-xs-12 col-sm-5 col-md-4 col-lg-3'>
		    <div class='thumbnail'>
		      <img src='images/tariffs/".$argument.".png' alt='' class='col-xs-5 col-sm-5 col-md-6 col-lg-6'>
		      <div class='my-tv-caption'>
		        <h4 class='my-tariff-name'>";
    }
    public static function render_tariffname($argument)
    {
        $render_tariffname = ArrayHelper::getValue(Tariffs::perevod($argument), '0');
        echo $render_tariffname;
    }
    public static function renderBlock_tv2()
    {
        echo "</h4>
		        <div class='my-tv-param'>
		        	<p class='my-tv-channel'>";
    }
    public static function render_tariffchannels($argument)
    {
        $render_tariffchannels = ArrayHelper::getValue(Tariffs::perevod($argument), '1');
        echo $render_tariffchannels;
    }
    public static function renderBlock_tv3()
    {
        echo "</p>
		        	<p class='my-tv-archive'>";
    }
    public static function render_tariffarchive($argument)
    {
        $render_tariffarchive = ArrayHelper::getValue(Tariffs::perevod($argument), '2');
        echo $render_tariffarchive;
    }
    public static function renderBlock_tv4()
    {
        echo "</p>
		        </div>
		        <div class='my-tv-cost'>
		        	<p class='my-cost-cost'>Стоимость тарифа:</p>
		        	<p class='my-cost-rubl'>";
    }
    public static function render_tariffcost($argument)
    {
        $render_tariffcost = ArrayHelper::getValue(Tariffs::perevod($argument), '3');
        echo $render_tariffcost;
    }
    public static function renderBlock_tv5()
    {
        echo "</p>
		        </div>
		        <div class='my-tv-buttons'>";
    }
    public static function echo_modal($argument)
    {
        Modals::renderModal_tv($argument);
    }
    public static function renderBlock_tv6()
    {
        echo "
                    </div>
                </div>
            </div>
        </div>";
    }
}