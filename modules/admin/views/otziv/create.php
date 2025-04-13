<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Otziv $model */

$this->title = 'Create Otziv';
$this->params['breadcrumbs'][] = ['label' => 'Otzivs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otziv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
