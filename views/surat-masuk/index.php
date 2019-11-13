<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuratMasukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Masuks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-masuk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Masuk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nomor_agenda',
            'no_surat',
            'surat_dari',
            'is_antar_dinas',
            //'no_tindak_lanjut',
            //'perihal:ntext',
            //'tanggal',
            //'lampiran',
            //'file_surat',
            //'file_lampiran',
            //'jumlah_lampiran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
