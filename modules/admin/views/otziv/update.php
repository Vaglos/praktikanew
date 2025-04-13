<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Otziv $model */

$this->title = 'Update Otziv: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Otzivs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="otziv-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
