<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Catalog $model */

$this->title = 'Редактировать запись: ' . $model->name;

?>
<div class="catalog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
