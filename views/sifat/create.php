<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sifat */

$this->title = 'Create Sifat';
$this->params['breadcrumbs'][] = ['label' => 'Sifats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sifat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
