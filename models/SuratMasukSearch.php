<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SuratMasuk;

/**
 * SuratMasukSearch represents the model behind the search form of `app\models\SuratMasuk`.
 */
class SuratMasukSearch extends SuratMasuk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'is_antar_dinas', 'jumlah_lampiran'], 'integer'],
            [['nomor_agenda', 'no_surat', 'surat_dari', 'no_tindak_lanjut', 'perihal', 'tanggal', 'lampiran', 'file_surat', 'file_lampiran'], 'safe'],
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
        $query = SuratMasuk::find();

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
            'is_antar_dinas' => $this->is_antar_dinas,
            'tanggal' => $this->tanggal,
            'jumlah_lampiran' => $this->jumlah_lampiran,
        ]);

        $query->andFilterWhere(['like', 'nomor_agenda', $this->nomor_agenda])
            ->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'surat_dari', $this->surat_dari])
            ->andFilterWhere(['like', 'no_tindak_lanjut', $this->no_tindak_lanjut])
            ->andFilterWhere(['like', 'perihal', $this->perihal])
            ->andFilterWhere(['like', 'lampiran', $this->lampiran])
            ->andFilterWhere(['like', 'file_surat', $this->file_surat])
            ->andFilterWhere(['like', 'file_lampiran', $this->file_lampiran]);

        return $dataProvider;
    }
}
