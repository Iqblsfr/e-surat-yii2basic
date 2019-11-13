<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppovalRulesNode */

$this->title = 'Update Appoval Rules Node: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Appoval Rules Nodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appoval-rules-node-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
