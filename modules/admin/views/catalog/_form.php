<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Catalog $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catalog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true,  'placeholder' => 'Введите имя']) ?>

    <?= $form->field($model, 'pol')->textInput(['maxlength' => true,  'placeholder' => 'Введите пол']) ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => true,  'placeholder' => 'Введите возвраст']) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'mesto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateprib')->textInput(['type'=>'date']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-new']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
