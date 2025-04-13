<?php

use app\models\Catalog;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CatalogSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Каталог';
?>
<div class="catalog-index" style="max-width: 1200px; margin: 20px auto; padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">

    <h1 style="text-align: center; color: #2c3e50;"><?= Html::encode($this->title) ?></h1>

    <p style="text-align: center;">
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-new', 'style' => 'padding: 10px 20px; border-radius: 5px; font-size: 16px;']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'table-responsive'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'pol',
            'year',
            'image',
            'mesto',
            'dateprib',
            [
                'class' => ActionColumn::className(),
                'header' => 'Действия',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<button class="btn btn-info btn-sm">Просмотреть</button>', $url, ['title' => 'Просмотреть']);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<button class="btn btn-warning btn-sm">Редактировать</button>', $url, ['title' => 'Редактировать']);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<button class="btn btn-danger btn-sm">Удалить</button>', $url, [
                            'title' => 'Удалить',
                            'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                            'data-method' => 'post',
                        ]);
                    },
                ],
            ],
        ],
        'tableOptions' => ['class' => 'table table-striped'], // Убедитесь, что границы убраны
    ]); ?>

    <div class="block1" style="display: flex; justify-content: center; gap: 20px; margin-top: 20px;">
        <a href="zayvka"><button type="button" class="btn btn-new" style="padding: 10px 20px; border-radius: 5px;">Перейти к заявкам</button></a>
        <a href="otziv"><button type="button" class="btn btn-new" style="padding: 10px 20px; border-radius: 5px;">Перейти к отзывам</button></a>
    </div>
</div>