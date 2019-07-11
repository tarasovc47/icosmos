<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

/**
 * ContactForm is the model behind the contact form.
 */

class ContactForm extends Model
{
/*    public $reCaptcha;*/
    public $name;
    public $email;
    public $phone;
    public $body;
    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'phone', 'body'], 'required', 'message' => '{attribute} необходимо заполнить'],
            // email has to be a valid email address
            ['email', 'email', 'message' => 'Введите адрес электронной почты в формате example@domain.com'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha', 'message' => 'нажмите на изображение для его смены и попробуйте снова'],
            /*[['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator2::className(),
                'secret' => 'your secret key', // unnecessary if reСaptcha is already configured
                'uncheckedMessage' => 'Please confirm that you are not a bot.'],*/
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Введите код с картинки',
            'name' => 'Ваше имя',
            'phone' => 'Телефон',
            'body' => 'Сообщение',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    /*public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo('info@icosmos.tv')
                ->setFrom([Yii::$app->params['senderEmail'] => $email])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();
            return true;
        }
        return false;
    }*/

    /**
     * @return string|\yii\web\Response
     */
    public static function actionMail()
    {
        $model = new ContactForm();
        $model->load(\Yii::$app->request->post()); ?>
        <div class="row">
            <div class="col-lg-12">
                <?php $form = ActiveForm::begin([
                    'id' => 'contact-form',
                ]); ?>
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Ваше имя', 'label' => 'Ваше имя']) ?>
                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'адрес электронной почты',])?>
                    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '+7 (999) 999 99 99',
                    ])->textInput(['placeholder' => $model->getAttributeLabel('phone')]);?>
                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                    <?php /*Гуглокапча, заработает только на ikosmos.tv= $form->field($model, 'reCaptcha')->widget(
                    \himiklab\yii2\recaptcha\ReCaptcha2::className(),
                    [
                        'siteKey' => '6LfJNq0UAAAAACWtNgJAmFJy8enuCLMYYy532WMy', // unnecessary is reCaptcha component was set up
                    ]
                )*/ ?>
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-4">{input}</div></div>',
                    ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <div class="contacts-validate"></div>
                <?php
                if ($model->validate()):
                    Yii::$app->mailer->compose()
                        ->setTo('av.shutov@rk.t72.ru')
                        ->setFrom('info@ikosmos.tv')
                        ->setSubject('Заявка с сайта')
                        ->setHtmlBody("<b>Поступило сообщение от</b> $model->name <b>(почта:</b> $model->email<b>)</b>. <br> " // текст с HTML
                            . "<br><b>Текст сообщения:</b><br> $model->body.<br><b>Контактный телефон: </b> $model->phone")
                        ->send();
                /*Yii::$app->session->addFlash('contactFormSubmitted');*/
                endif;
               /* if (Yii::$app->session->hasFlash('contactFormSubmitted')):
                    ContactForm::mailGrace();
                endif;*/
                ActiveForm::end();
                ?>
            </div>
        </div>
    <?php
    }
   /* public static function mailGrace() {
        echo 'Спасибо!';
    }*/
}