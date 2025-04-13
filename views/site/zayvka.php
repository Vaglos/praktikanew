<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Заявка на усыновление';
?>
<div class="site-login container mt-5">
    <h1 class="text-center mb-4"><?= Html::encode($this->title) ?></h1>

    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 col-sm-10">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Форма заявки</h4>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal']]); ?>

                    <?= $form->field($model, 'fio')->textInput(['placeholder' => 'Введите ваше ФИО'])->label(false) ?>
                    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::class, [
                        'mask' => '+7(999)-999-99-99',
                        'options' => ['placeholder' => 'Введите номер телефона']
                    ])->label(false) ?>

                    <?= $form->field($model, 'animal_id')->dropdownList(
                        \app\models\Catalog::find()->select(['name', 'id'])->indexBy('id')->column(),
                        ['prompt' => 'Выберите имя животного']
                    )->label(false); ?>

                    <div class="form-group text-center">
                        <?= Html::submitButton('Отправить заявку', ['class' => 'btn btn-new btn-block', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>