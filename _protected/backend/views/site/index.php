<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Persona Admin';
?>
<div class="site-index container">

    <div class="jumbotron">
        <h1>Selamat Datang</h1>

        <p class="lead">Anda berada di halaman utama Admin Page PERSONA.</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6 text-center">
                <p><a class="btn btn-primary btn-jumbo" href="<?= Yii::$app->request->baseUrl ?>/customer/index"><span class="glyphicon glyphicon-user"></span> &nbsp;DATA CUSTOMER</a></p>
            </div>
            
            <div class="col-lg-6">
               <p><a class="btn btn-success btn-jumbo" href="<?= Yii::$app->request->baseUrl ?>/pembelian/index"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;DATA PEMBELIAN</a></p>
            </div>
            
        </div>

    </div>
</div>
