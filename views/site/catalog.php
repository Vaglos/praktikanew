<?php

/** @var yii\web\View $this */

/** @var yii\bootstrap5\ActiveForm $form */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Каталог животных';
?>
<h1 style="display: flex; flex-direction: row; justify-content: center; color: #2c3e50; margin-bottom: 20px; font-size: 36px; font-weight: bold;">
    <?= Html::encode($this->title) ?>
</h1>

<div class="container" style="display: flex; flex-wrap: wrap; justify-content: center;">
    <?php foreach ($animal as $an): ?>
        <div class="card" style="flex: 0 1 calc(50% - 40px); margin: 20px; border: none; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s;">
            <div class="row g-0">
                <div class="col-md-4" style="display: flex; justify-content: center; align-items: center;">
                    <img src="../image/<?php echo $an['image']?>" class="img-fluid" alt="Питомец" style="border-radius: 15px; width: 400px; height: 200px; object-fit: cover;">
                </div>
                <div class="col-md-8">
                    <div class="card-body" style="padding: 15px; background-color: #ffffff;">
                        <h5 class="card-title">Имя: <?= $an['name']?></h5>
                        <p class="card-text" >Пол: <?= $an['pol']?></p>
                        <p class="card-text" >Возраст: <?= $an['year']?></p>
                        <p class="card-text" >Место отлова: <?= $an['mesto']?></p>
                        <p class="card-text" >Дата прибытия: <?= $an['dateprib']?></p>

                        <a href="zayvka">
                            <button type="button" class="btn btn-new" style="border: none; border-radius: 30px; padding: 10px 20px; cursor: pointer; transition: background-color 0.3s;">
                                Оставить заявку
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<style>
    .card:hover {
        transform: scale(1.05);
    }
</style>





