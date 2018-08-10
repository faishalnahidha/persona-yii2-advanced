<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pembelian */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="pembelian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'id_customer')->textInput(['placeholder' => 'Id Customer']) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kota')->textInput(['maxlength' => true, 'placeholder' => 'Kota']) ?>

    <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true, 'placeholder' => 'Provinsi']) ?>

    <?= $form->field($model, 'kode_pos')->textInput(['placeholder' => 'Kode Pos']) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true, 'placeholder' => 'No Telp']) ?>

    <?= $form->field($model, 'catatan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'biaya_kirim')->textInput(['placeholder' => 'Biaya Kirim']) ?>

    <?= $form->field($model, 'kuantitas')->textInput(['placeholder' => 'Kuantitas']) ?>

    <?= $form->field($model, 'total')->textInput(['placeholder' => 'Total']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
