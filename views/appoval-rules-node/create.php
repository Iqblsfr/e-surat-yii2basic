<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppovalRulesNode */

$this->title = 'Create Appoval Rules Node';
$this->params['breadcrumbs'][] = ['label' => 'Appoval Rules Nodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appoval-rules-node-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
