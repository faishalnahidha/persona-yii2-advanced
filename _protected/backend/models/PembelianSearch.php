<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pembelian;

/**
 * backend\models\PembelianSearch represents the model behind the search form about `common\models\Pembelian`.
 */
 class PembelianSearch extends Pembelian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_customer', 'kode_pos', 'biaya_kirim', 'kuantitas', 'total'], 'integer'],
            [['alamat', 'kota', 'provinsi', 'no_telp', 'catatan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Pembelian::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_customer' => $this->id_customer,
            'kode_pos' => $this->kode_pos,
            'biaya_kirim' => $this->biaya_kirim,
            'kuantitas' => $this->kuantitas,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kota', $this->kota])
            ->andFilterWhere(['like', 'provinsi', $this->provinsi])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'catatan', $this->catatan]);

        return $dataProvider;
    }
}
