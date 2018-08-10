<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Pembelian */

$this->title = 'Create Pembelian';
$this->params['breadcrumbs'][] = ['label' => 'Pembelian', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembelian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-sm-6">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
</div>
