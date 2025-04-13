<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zayvka".
 *
 * @property int $id
 * @property string $fio
 * @property string $phone
 * @property int $animal_id
 *
 * @property Catalog $animal
 */
class Zayvka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zayvka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'phone', 'animal_id'], 'required'],
            [['animal_id'], 'integer'],
            [['fio'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['animal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Catalog::class, 'targetAttribute' => ['animal_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'phone' => 'Номер телефона',
            'animal_id' => 'Выберите животного',
        ];
    }

    /**
     * Gets query for [[Animal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimal()
    {
        return $this->hasOne(Catalog::class, ['id' => 'animal_id']);
    }
}
