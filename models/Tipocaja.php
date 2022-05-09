<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipocaja".
 *
 * @property int $id
 * @property string $nombre
 * @property float $pesokg
 * @property string $detalles
 *
 * @property Caja[] $cajas
 */
class Tipocaja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipocaja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'pesokg', 'detalles'], 'required'],
            [['pesokg'], 'number'],
            [['detalles'], 'string'],
            [['nombre'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'pesokg' => 'Pesokg',
            'detalles' => 'Detalles',
        ];
    }

    /**
     * Gets query for [[Cajas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCajas()
    {
        return $this->hasMany(Caja::className(), ['tipocaja_id' => 'id']);
    }
}
