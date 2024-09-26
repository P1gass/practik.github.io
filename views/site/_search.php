<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CatalogSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catalog-search">

    <?php $form = ActiveForm::begin([
        'action' => ['catalog'],
        'method' => 'get',
        'class' => 'search'
    ]); ?>


    <?= $form->field($model, 'name') -> textInput(['placeholder' => 'Поиск...'])?>


    <div class="form-group">

        <?= Html::submitButton('Найти', ['class' => 'btn btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
