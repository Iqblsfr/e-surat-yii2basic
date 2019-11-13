<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "approval_surat_keluar".
 *
 * @property int $id
 * @property string $status
 * @property string $tanggal
 * @property string $keterangan
 */
class ApprovalSuratKeluar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'approval_surat_keluar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['keterangan'], 'string'],
            [['status'], 'string', 'max' => 45],
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
