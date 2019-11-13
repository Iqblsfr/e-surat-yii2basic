<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appoval_rules_node".
 *
 * @property int $id
 * @property int $bisa_menandatangani
 * @property int $bisa_atas_nama
 */
class AppovalRulesNode extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appoval_rules_node';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bisa_menandatangani', 'bisa_atas_nama'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bisa_menandatangani' => 'Bisa Menandatangani',
            'bisa_atas_nama' => 'Bisa Atas Nama',
        ];
    }
}
