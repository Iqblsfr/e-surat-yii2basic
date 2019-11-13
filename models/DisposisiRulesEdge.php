<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disposisi_rules_edge".
 *
 * @property int $id
 */
class DisposisiRulesEdge extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'disposisi_rules_edge';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }
}
