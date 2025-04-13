<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Авторизация';
?>
<div class="site-login" style="padding-top: 10%; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); padding: 30px;">
    <h1 style="text-align: center; color: #2c3e50;"><?= Html::encode($this->title) ?></h1>

    <p style="text-align: center; font-size: 18px; color: #7f8c8d;">Пожалуйста, заполните следующие поля для входа в аккаунт:</p>

    <div class="row" style="display: flex; justify-content: center;">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{input}\n{error}",
                    'inputOptions' => ['class' => 'form-control', 'style' => 'border-radius: 5px;'],
                    'errorOptions' => ['class' => 'text-danger'],
                ],
            ]); ?>

            <div class="form-group">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Имя пользователя'])->label(false) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль'])->label(false) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div>{error}</div>",
                    'labelOptions' => ['class' => 'custom-control-label'],
                ])->label('Запомнить меня') ?>
            </div>

            <div class="form-group" style="display: flex; justify-content: center;">
                <div>
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-new', 'name' => 'login-button', 'style' => 'border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
