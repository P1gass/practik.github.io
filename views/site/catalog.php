<?php

use app\models\Catalog;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CatalogSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

?>


    <?= \yii\widgets\ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class' => 'item'],
            'itemView' => function ($model, $key, $index, $widget) {
                return Html::a(Html::encode($model -> name), ['about', 'id' => $model -> category_id]);
            },
    ])?>



<style>
    #w1{
        display: flex !important;
    }

    #w4{
        display: flex !important;
    }

    .form-group{
        display: flex;
        margin-bottom: 0 !important;
    }

    .summary{
        display: none;
    }
</style>
