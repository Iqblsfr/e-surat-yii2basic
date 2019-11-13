<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_masuk".
 *
 * @property int $id
 * @property string $nomor_agenda
 * @property string $no_surat
 * @property string $surat_dari
 * @property int $is_antar_dinas
 * @property string $no_tindak_lanjut
 * @property string $perihal
 * @property string $tanggal
 * @property string $lampiran
 * @property string $file_surat
 * @property string $file_lampiran
 * @property int $jumlah_lampiran
 */
class SuratMasuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_masuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'is_antar_dinas', 'jumlah_lampiran'], 'integer'],
            [['perihal'], 'string'],
            [['tanggal'], 'safe'],
            [['nomor_agenda', 'no_surat', 'surat_dari', 'no_tindak_lanjut', 'lampiran', 'file_surat', 'file_lampiran'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomor_agenda' => 'Nomor Agenda',
            'no_surat' => 'No Surat',
            'surat_dari' => 'Surat Dari',
            'is_antar_dinas' => 'Is Antar Dinas',
            'no_tindak_lanjut' => 'No Tindak Lanjut',
            'perihal' => 'Perihal',
            'tanggal' => 'Tanggal',
            'lampiran' => 'Lampiran',
            'file_surat' => 'File Surat',
            'file_lampiran' => 'File Lampiran',
            'jumlah_lampiran' => 'Jumlah Lampiran',
        ];
    }
}
