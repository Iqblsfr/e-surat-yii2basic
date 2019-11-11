<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instansi".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property string $no_telepon
 * @property string $kode_pos
 * @property string $fax
 */
class Instansi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instansi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alamat'], 'string'],
            [['nama'], 'string', 'max' => 45],
            [['no_telepon', 'fax'], 'string', 'max' => 20],
            [['kode_pos'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_telepon' => 'No Telepon',
            'kode_pos' => 'Kode Pos',
            'fax' => 'Fax',
        ];
    }
}
