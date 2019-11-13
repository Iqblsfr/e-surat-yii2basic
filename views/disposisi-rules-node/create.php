<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DisposisiRulesNode */

$this->title = 'Create Disposisi Rules Node';
$this->params['breadcrumbs'][] = ['label' => 'Disposisi Rules Nodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disposisi-rules-node-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
