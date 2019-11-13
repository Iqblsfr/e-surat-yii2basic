<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JabatanUsers */

$this->title = 'Create Jabatan Users';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
