<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $client_name
 * @property string $client_email
 * @property string $client_phone
 * @property string $client_message
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_name', 'client_email', 'client_phone', 'client_message'], 'required'],
            [['client_name', 'client_email', 'client_phone'], 'string', 'max' => 255],
            [['client_message'], 'string', 'max' => 10240],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_name' => 'Client Name',
            'client_email' => 'Client Email',
            'client_phone' => 'Client Phone',
            'client_message' => 'Client Message',
        ];
    }
}
