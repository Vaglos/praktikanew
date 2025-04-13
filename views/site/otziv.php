<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Написать отзыв';
?>
<div class="site-login" style="max-width: 600px; margin: 5% auto; padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; color: #2c3e50;"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12">

            <?php $form = ActiveForm::begin([]); ?>

            <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Напишите ваш отзыв...', 'style' => 'border-radius: 5px; border: 1px solid #ccc; padding: 10px;'])->label(false) ?>

            <div class="form-group" style="text-align: center;">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-new', 'style' => 'padding: 10px 20px; border-radius: 5px;']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>


<div class="container" style="display: flex; flex-wrap: wrap; justify-content: center; padding: 10px;">
    <?php foreach ($otz as $o): ?>
        <div class="card" style="flex: 0 1 calc(50% - 40px); margin: 20px; border: none; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s; background-color: #f9f9f9;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body" style="padding: 15px;">
                        <p class="card-text" style="font-size: 16px; line-height: 1.5;"><b>Отзыв:</b><br><?= nl2br(htmlspecialchars($o['body'])) ?></p>
                        <p class="text-muted" style="font-size: 14px;">
                            <small> Написано: <b><?php echo Yii::$app->formatter->asDatetime($model->created_at) ?></b><br>
                                Автор: <b><?php echo htmlspecialchars($model->createdBy->username) ?></b>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


