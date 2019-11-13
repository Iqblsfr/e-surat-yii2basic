<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuratKeluar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-keluar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor_klasifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_lampiran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perihal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'isi_surat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'isi_lampiran_surat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'no_agenda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
