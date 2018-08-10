<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PembelianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-pembelian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'id_customer')->textInput(['placeholder' => 'Id Customer']) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kota')->textInput(['maxlength' => true, 'placeholder' => 'Kota']) ?>

    <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true, 'placeholder' => 'Provinsi']) ?>

    <?php /* echo $form->field($model, 'kode_pos')->textInput(['placeholder' => 'Kode Pos']) */ ?>

    <?php /* echo $form->field($model, 'no_telp')->textInput(['maxlength' => true, 'placeholder' => 'No Telp']) */ ?>

    <?php /* echo $form->field($model, 'catatan')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'biaya_kirim')->textInput(['placeholder' => 'Biaya Kirim']) */ ?>

    <?php /* echo $form->field($model, 'kuantitas')->textInput(['placeholder' => 'Kuantitas']) */ ?>

    <?php /* echo $form->field($model, 'total')->textInput(['placeholder' => 'Total']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
