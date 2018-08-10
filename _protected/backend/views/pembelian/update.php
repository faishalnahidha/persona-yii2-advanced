<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pembelian */

$this->title = 'Update Pembelian: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pembelian', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembelian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-sm-6">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
</div>
