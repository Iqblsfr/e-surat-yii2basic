<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuratMasuk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-masuk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nomor_agenda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surat_dari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_antar_dinas')->textInput() ?>

    <?= $form->field($model, 'no_tindak_lanjut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perihal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'lampiran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_lampiran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_lampiran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
