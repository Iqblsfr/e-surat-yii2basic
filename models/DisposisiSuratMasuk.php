<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disposisi_surat_masuk".
 *
 * @property int $id
 * @property string $status
 * @property string $tanggal
 * @property string $keterangan
 */
class DisposisiSuratMasuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'disposisi_surat_masuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['status'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
        ];
    }
}
