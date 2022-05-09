<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Usuario;
use yii\data\ActiveDataProvider;

/**
 * UsuarioSearch represents the model behind the search form of `app\models\Entradas`.
 */
class UsuarioSearch extends Usuario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'finca_id', 'usuario', 'nombre', 'mail_corp', 'mail_per', 'telefono', 'rol'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usuario::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'usuario' => $this->usuario,
            'nombre' => $this->nombre,
            'mail_corp' => $this->mail_corp,
            'mail_per' => $this->mail_per,
        ]);
        if(!hasrole('A'))
            $query->andFilterWhere(['usuarios_id'=>Yii::$app->user->id]);

        $query->andFilterWhere(['like', 'texto', $this->texto])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'aprobada', $this->aprobada]);

        return $dataProvider;
    }
}
