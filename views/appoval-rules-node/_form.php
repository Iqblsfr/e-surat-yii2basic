<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppovalRulesNode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appoval-rules-node-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bisa_menandatangani')->textInput() ?>

    <?= $form->field($model, 'bisa_atas_nama')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
