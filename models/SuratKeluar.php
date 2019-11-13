<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_keluar".
 *
 * @property int $id
 * @property string $nomor_klasifikasi
 * @property string $file_lampiran
 * @property string $perihal
 * @property string $isi_surat
 * @property string $isi_lampiran_surat
 * @property string $no_agenda
 * @property string $tanggal
 */
class SuratKeluar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_keluar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['perihal', 'isi_surat', 'isi_lampiran_surat'], 'string'],
            [['tanggal'], 'safe'],
            [['nomor_klasifikasi', 'file_lampiran', 'no_agenda'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomor_klasifikasi' => 'Nomor Klasifikasi',
            'file_lampiran' => 'File Lampiran',
            'perihal' => 'Perihal',
            'isi_surat' => 'Isi Surat',
            'isi_lampiran_surat' => 'Isi Lampiran Surat',
            'no_agenda' => 'No Agenda',
            'tanggal' => 'Tanggal',
        ];
    }
}
