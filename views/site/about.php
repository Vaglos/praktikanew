<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Поиск';
?>
<div class="site-about" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; color: #2c3e50;"><?= Html::encode($this->title) ?></h1>

    <form style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
        <input type="search" name="q" placeholder="Поиск по сайту" style="width: 70%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; margin-right: 10px;">
        <input type="submit" value="Найти" style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s;">
    </form>
</div>
