<?php

/**
 * @var $model
 *
 */


use app\models\Category;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;


?>

    <div class="mb-3">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'description')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'file')->fileInput() ?>
        <?php echo $form->field($model, 'category_id')->dropdownList(
            Category::find()->select(['name', 'id'])->indexBy('id')->column(),
            ['prompt'=>'Выберите категорию']
        );?>


        <div class="form-group">
            <div>
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


<style>
    .mb-3{
        display: flex !important;
        flex-direction: column !important;
        margin: 10px 0 !important;
    }
</style>