<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog".
 *
 * @property int $id
 * @property string $name
 * @property string $pol
 * @property string $year
 * @property string|null $image
 * @property string $mesto
 * @property string $dateprib
 *
 * @property Zayvka[] $zayvkas
 */
class Catalog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'pol', 'year', 'mesto'], 'required'],
            [['dateprib'], 'safe'],
            [['name', 'pol', 'year', 'image', 'mesto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'pol' => 'Пол',
            'year' => 'Возвраст',
            'image' => 'Image',
            'mesto' => 'Место отлова',
            'dateprib' => 'Дата',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->image->saveAs('uploads/' . $this->image->baseName . '.' . $this->image->extension);
            return true;
        } else {
            return false;
        }
    }

    /**
     * Gets query for [[Zayvkas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZayvkas()
    {
        return $this->hasMany(Zayvka::class, ['animal_id' => 'id']);
    }
}
