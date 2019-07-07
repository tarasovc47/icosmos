<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $secondname
 * @property string $firstname
 * @property string $position
 * @property string $email
 * @property string $personal_phone
 * @property string $official_phone
 * @property string $status
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['secondname', 'firstname', 'position', 'email', 'personal_phone', 'official_phone', 'status'], 'required'],
            [['secondname', 'firstname', 'position', 'email', 'personal_phone', 'official_phone', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'secondname' => 'Secondname',
            'firstname' => 'Firstname',
            'position' => 'Position',
            'email' => 'Email',
            'personal_phone' => 'Personal Phone',
            'official_phone' => 'Official Phone',
            'status' => 'Status',
        ];
    }
}
