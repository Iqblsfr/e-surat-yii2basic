<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disposisi_rules_node".
 *
 * @property int $id
 * @property int $penerima_surat
 */
class DisposisiRulesNode extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'disposisi_rules_node';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['penerima_surat'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'penerima_surat' => 'Penerima Surat',
        ];
    }
}
