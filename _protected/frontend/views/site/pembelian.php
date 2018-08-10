<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\widgets\TouchSpin;

/* @var $this yii\web\View */
/* @var $model common\models\Pembelian */
/* @var $form ActiveForm */
$this->title = 'Pembelian';
?>
<div class="pembelian">
    <div class="below-navbar"></div>
    <div class="container" style="padding:50px 20px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 style="font-size:50px;color:#222;">Pembelian</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6"> <img class="img-responsive center" src="<?= Yii::$app->request->baseUrl ?>/img/book-mockup-2.png" alt="Book Mockup" width="70%"> </div>
            <div class="col-sm-6" style="padding:0 30px">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Harga Rp 100.000</h2>
                        <p>Spesifikasi Buku :</p>
                        <ul>
                            <li>Jenis Buku : Pengembangan Diri</li>
                            <li>Ukuran : 15 x 23 cm</li>
                            <li>Halaman : 200 + 23 hal</li>
                            <li>Cover : Art Paper 230, Doft Finishing</li>
                            <li>Kertas Isi : HVS 100</li>
                            <li>Cetak : Full Color</li>
                        </ul>
                        <br>
                        <a href="#form-pemesanan" class="btn btn-outline btn-xl page-scroll">Beli Buku Persona</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="form-pemesanan" style="padding-top:40px">
            <div class="col-md-offset-2 col-md-8 col-md-offset-2 container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">Formulir Pemesanan : <?= Yii::$app->user->identity->nama_lengkap ?></h2>
                    </div>
                </div>
                
                <?php $form = ActiveForm::begin(); ?>
                
                <div class="row">
                    <div class="col-sm-12">
                        <?= $form->field($model, 'alamat')->textArea()->label("Alamat Lengkap*") ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <?= $form->field($model, 'kota')->label("Kota/Kabupaten*") ?>
                    </div>
                    <div class="col-sm-5">
                        <?= $form->field($model, 'provinsi')->label("Provinsi*") ?>
                    </div>
                    <div class="col-sm-2">
                        <?= $form->field($model, 'kode_pos') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <?= $form->field($model, 'no_telp')->label("No. Telepon/HP*") ?>
                    </div>
                    <div class="col-sm-5">
                        <?= $form->field($model, 'kuantitas')->label("Jumlah Buku*") ?>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <?= $form->field($model, 'catatan')->textArea() ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        <p class="text-danger" style="font-size:14px">
                            * wajib diisi!
                        </p>
                    </div>
                </div>
                <div class="form-group" style="padding-top:1em;">
                    <?= Html::submitButton('<span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; Beli', [
                        'class' => 'btn btn-primary btn-xl',
                        'data' => [
                            'confirm' => 'Anda akan memesan buku Persona?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </div>
                
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div><!-- pembelian -->