<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DisposisiRulesNodeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Disposisi Rules Nodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disposisi-rules-node-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Disposisi Rules Node', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'penerima_surat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
