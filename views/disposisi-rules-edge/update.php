<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DisposisiRulesEdge */

$this->title = 'Update Disposisi Rules Edge: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Disposisi Rules Edges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="disposisi-rules-edge-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
