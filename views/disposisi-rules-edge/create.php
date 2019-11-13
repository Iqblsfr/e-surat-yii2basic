<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DisposisiRulesEdge */

$this->title = 'Create Disposisi Rules Edge';
$this->params['breadcrumbs'][] = ['label' => 'Disposisi Rules Edges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disposisi-rules-edge-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
