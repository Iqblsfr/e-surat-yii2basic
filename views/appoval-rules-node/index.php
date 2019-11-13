<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppovalRulesNodeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Appoval Rules Nodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appoval-rules-node-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Appoval Rules Node', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'bisa_menandatangani',
            'bisa_atas_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
