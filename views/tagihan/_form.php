<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tagihan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagihan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_tagihan')->textInput() ?>

    <?= $form->field($model, 'no_pdam')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jmlbln_lalu')->textInput() ?>

    <?= $form->field($model, 'jmlbln_ini')->textInput() ?>

    <?= $form->field($model, 'harga_satuan')->textInput() ?>

    <?= $form->field($model, 'tgl_bayar')->textInput() ?>

    <?= $form->field($model, 'status_bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_bayar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
