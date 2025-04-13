<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Zayvka $model */

$this->title = 'Редактировать: ' . $model->id;
?>
<div class="zayvka-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
