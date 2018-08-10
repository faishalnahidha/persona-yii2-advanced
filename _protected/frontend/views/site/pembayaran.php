<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use yii\bootstrap\Modal;

$this->title = 'Cara Pembayaran';
?>
    <div class="below-navbar"></div>
    <div class="container" style="padding:100px 20px 0">
        <div class="row">
            <h1>Hai <?= Yii::$app->user->identity->username ?>!&nbsp; Terima kasih sudah memesan buku Persona</h1>
            <br>
            <br>
            <div class="col-md-7">
                <blockquote>
                    <p>Pemesanan hanya bisa diproses setelah anda melakukan transaksi pembayaran. Segera lakukan pembayaran dalam 1x24 jam. Kami akan mengkonfirmasi dan menghubungi anda jika transaksi pembayaran sudah kami terima. </p>
                    <p>Lakukan transfer sebesar <strong>Rp 
                    <?= $model->total ?>,-</strong> ke:
                        <br> Bank MANDIRA
                        <br> No. Rekening 999-00-1234567-9
                        <br> a/n Faishal Izzan N.
                        <br> </p>
                </blockquote>
                <p class="text-info" style="font-size:1em">Customer Service aktif Senin&ndash;Jumat (08:00&ndash;16:00), Sabtu (08:00&ndash;14:00). Jika dalam waktu tersebut Customer Service belum mengkonfirmasi pembayaran anda, harap hubungi kami di:
                    <br> &bull; line id : @persona.id
                    <br> &bull; whatsapp : 087889965337
                    <br> &bull; email : corporationpersona@gmail.com </p>
            </div>
        </div>
        <div class="row">
            <?php 
            $gridColumn = [
                'id',
                'alamat:ntext',
                'kota',
                'provinsi', 
                'kode_pos',
                'no_telp',
                'catatan:ntext',
                'biaya_kirim',
                'kuantitas',
                'total',
            ];
            Modal::begin([
                'header' => '<h4 class="modal-title">Detail Pesanan</h4>',
                'headerOptions' => ['class' => 'bg-info'],
                'toggleButton' => ['label' => '<span class="glyphicon glyphicon-th-list"></span>&nbsp; Detail Pesanan', 'class' => 'btn btn-info btn-xl'],
                'options' => ['tabindex' => false]
            ]);
            echo '<p>Nama Pemesan : ', Yii::$app->user->identity->nama_lengkap, '</p>';
            echo DetailView::widget([
                'model' => $model,
                'attributes' => $gridColumn
            ]); // refer the demo page for widget settings
            Modal::end();
        ?> </div>
    </div>