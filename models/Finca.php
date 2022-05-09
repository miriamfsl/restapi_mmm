<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "finca".
 *
 * @property int $id
 * @property string $nombre
 * @property string $ubicacion
 * @property string $telefono
 *
 * @property Orden[] $ordens
 * @property Parcela[] $parcelas
 * @property Usuario[] $usuarios
 */
class Finca extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'finca';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'ubicacion', 'telefono'], 'required'],
            [['nombre'], 'string', 'max' => 30],
            [['ubicacion'], 'string', 'max' => 60],
            [['telefono'], 'string', 'max' => 20],
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
            'ubicacion' => 'Ubicacion',
            'telefono' => 'Telefono',
        ];
    }

    /**
     * Gets query for [[Ordens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrdens()
    {
        return $this->hasMany(Orden::class, ['finca_id' => 'id']);
    }

    /**
     * Gets query for [[Parcelas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParcelas()
    {
        return $this->hasMany(Parcela::class, ['finca_id' => 'id']);
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::class, ['finca_id' => 'id']);
    }

    public static function lookup(){

        return ArrayHelper::map(self::find()->asArray()->all(),'id','nombre');
    }
}
