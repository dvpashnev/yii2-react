<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anketa_email".
 *
 * @property int $id
 * @property string $email
 * @property int $anketaId
 * @property int $recruitmentId
 */
class AnketaEmail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anketa_email';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'anketaId', 'recruitmentId'], 'required'],
            [['anketaId', 'recruitmentId'], 'integer'],
            [['email'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'anketaId' => 'Anketa ID',
            'recruitmentId' => 'Recruitment ID',
        ];
    }
}
