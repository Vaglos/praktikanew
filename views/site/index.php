<?php

/** @var yii\web\View $this */

$this->title = 'PetAdoption - платформа дляпоиска и усыновления домашних животных';
?>


<div class="site-index" style="border-radius: 15px ;padding: 20px; text-align: center; background-color: #f0f8ff;">
    <h1 style="font-size: 48px; color: #2c3e50; margin-bottom: 10px;"><span class="c1">Pet</span><span class="c2">Adoption</span></h1>
    <p class="description" style="font-size: 22px; color: #34495e; margin-bottom: 20px;">
        Платформа для поиска и усыновления домашних животных,<br>связывающая приюты и потенциальных владельцев.
    </p>
    <a href="site/zayvka">
        <button class="btn btn-new" style="width: 220px; height: 60px; margin: 10px;border: none; border-radius: 30px; cursor: pointer; font-size: 18px; transition: background-color 0.3s;">
            Оставить заявку
        </button>
    </a>
    <div class="imgg" style="display:flex; justify-content: center; margin-top: 20px;">
        <img src="image/koll.png" style="max-width: 100%; height: auto; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.2);">
    </div>
</div>

<div class="about-section" style="padding: 20px; text-align: center;">
    <h2 style="color: #2980b9; margin-bottom: 20px;">Как проходит процесс усыновления?</h2>
    <ul style="list-style-type: none; padding: 0; font-size: 20px; color: #34495e;">
        <li>1. Заполните заявку на сайте.</li>
        <li>2. Пройдите собеседование с координатором.</li>
        <li>3. Познакомьтесь с питомцем.</li>
        <li>4. Завершите оформление документов.</li>
    </ul>
</div>

<div class="testimonials" style="padding: 20px; background-color: #f9f9f9; text-align: center; border-top: 2px solid #2980b9;">
    <h2 style="color: #2980b9; margin-bottom: 20px;">Отзывы наших клиентов</h2>
    <blockquote style="font-style: italic; color: #34495e; margin: 10px 0; font-size: 18px;">
        «Поняла, что домашний питомец — это лучшее решение!»
    </blockquote>
    <blockquote style="font-style: italic; color: #34495e; margin: 10px 0; font-size: 18px;">
        «Спасибо PetAdoption за помощь в поиске друга!»
    </blockquote>
</div>

<h2 style="display: flex; justify-content: center; padding-top: 2%; color: #2980b9;">Наши питомцы</h2>
<div class="available-pets" style="display: flex; justify-content: center; flex-wrap: wrap; padding: 20px;">
    <div class="card" style="width: 18rem; margin: 10px; border: none; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.2); overflow: hidden;">
        <img src="image/linda.jpg" class="card-img-top" alt="Питомец" style="border-top-left-radius: 10px; border-top-right-radius: 10px; height: 340px; object-fit: cover;">
        <div class="card-body" style="padding: 15px; background-color: #ffffff;">
            <h5 class="card-title" style="color: #2c3e50;">Линда</h5>
            <p class="card-text" style="color: #34495e;">Милая собака, ищущая дом.</p>
        </div>
    </div>
    <div class="card" style="width: 18rem; margin: 10px; border: none; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.2); overflow: hidden;">
        <img src="image/zara.jpg" class="card-img-top" alt="Питомец" style="border-top-left-radius: 10px; border-top-right-radius: 10px; height: 340px; object-fit: cover;">
        <div class="card-body" style="padding: 15px; background-color: #ffffff;">
            <h5 class="card-title" style="color: #2c3e50;">Зара</h5>
            <p class="card-text" style="color: #34495e;">Милая собака, ищущая дом.</p>
        </div>
    </div>
    <div class="card" style="width: 18rem; margin: 10px; border: none; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.2); overflow: hidden;">
        <img src="image/dina.jpg" class="card-img-top" alt="Питомец" style="border-top-left-radius: 10px; border-top-right-radius: 10px; height: 340px; object-fit: cover;">
        <div class="card-body" style="padding: 15px; background-color: #ffffff;">
            <h5 class="card-title" style="color: #2c3e50;">Дина</h5>
            <p class="card-text" style="color: #34495e;">Милая собака, ищущая дом.</p>
        </div>
    </div>

