<?php

namespace app\models;

use phpDocumentor\Reflection\DocBlock\Tags\Param;
use Yii;

/**
 * This is the model class for table "orden".
 *
 * @property int $id
 * @property string $lote
 * @property int $variedad_id
 * @property int $finca_id
 * @property string $fecha
 * @property int $cantidad
 * @property string $estado
 *
 * @property Caja[] $cajas
 * @property Finca $finca
 * @property OrdenPedidoinfo[] $ordenPedidoinfos
 * @property Variedad $variedad
 */
class Orden extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orden';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lote', 'variedad_id', 'finca_id', 'fecha', 'cantidad'], 'required'],
            [['variedad_id', 'finca_id', 'cantidad'], 'integer'],
            [['fecha'], 'safe'],
            [['estado'], 'string'],
            [['lote'], 'string', 'max' => 20],
            [['variedad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Variedad::class, 'targetAttribute' => ['variedad_id' => 'id']],
            [['finca_id'], 'exist', 'skipOnError' => true, 'targetClass' => Finca::class, 'targetAttribute' => ['finca_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lote' => 'Lote',
            'variedad_id' => 'Variedad ID',
            'finca_id' => 'Finca ID',
            'parcela_id' => 'Parcela ID',
            'fecha' => 'Fecha',
            'cantidad' => 'Cantidad',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[Cajas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCajas()
    {
        return $this->hasMany(Caja::class, ['orden_id' => 'id']);
    }

    /**
     * Gets query for [[Finca]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFinca()
    {
        return $this->hasOne(Finca::class, ['id' => 'finca_id']);
    }
    public function getParcela()
    {
        return $this->hasOne(Parcela::class, ['id' => 'parcela_id']);
    }

    /**
     * Gets query for [[OrdenPedidoinfos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenPedidoinfos()
    {
        return $this->hasMany(OrdenPedidoinfo::class, ['orden_id' => 'id']);
    }

    /**
     * Gets query for [[Variedad]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVariedad()
    {
        return $this->hasOne(Variedad::class, ['id' => 'variedad_id']);
    }
    public function fields(){
        $campos = parent::fields();
        array_push($campos,'finca','parcela','variedad');
        return $campos;
    }
}
