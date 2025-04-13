<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Форма связи';
?>
<div class="site-contact" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; color: #2c3e50;"><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
        <div class="alert alert-success" style="text-align: center; color: #27ae60;">
            Спасибо! Ваше сообщение успешно отправлено.
        </div>
    <?php else: ?>

        <p style="text-align: center; font-size: 16px; color: #7f8c8d;">
            Если у вас есть другие вопросы, пожалуйста, заполните следующую форму, чтобы связаться с нами. Спасибо.
        </p>

        <div class="row">
            <div class="col-lg-12">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Ваше имя', 'style' => 'border-radius: 5px;']) ?>
                <?= $form->field($model, 'email')->textInput(['placeholder' => 'Ваш email', 'style' => 'border-radius: 5px;']) ?>
                <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Тема сообщения', 'style' => 'border-radius: 5px;']) ?>
                <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Ваше сообщение', 'style' => 'border-radius: 5px;']) ?>

                <div class="form-group" style="text-align: center;">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-new', 'name' => 'contact-button', 'style' => 'border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>

