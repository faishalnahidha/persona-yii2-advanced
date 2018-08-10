<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="below-navbar"></div>
    <div class="container" style="padding:100px 20px 0">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Isi kolom di bawah untuk login:</p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div style="color:#666;margin:1.5em 0">
                        Lupa password <?= Html::a('klik di sini', ['site/request-password-reset'], ['class' => 'text-info']) ?>  &nbsp; | &nbsp; Belum daftar? <?= Html::a('klik di sini', ['site/signup'], ['class' => 'text-info']) ?>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-xl', 'name' => 'login-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
