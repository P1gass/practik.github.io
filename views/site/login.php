<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>
<h5 class="text">
    Для продолжения необходимо авторизоваться<br>
    Если нет аккаунта, вы можете его <a href="<?php \yii\helpers\Url::to('site/signup') ?>>">Зарегистрировать</a>
</h5>
<div class="site-login"

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Логин']) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль']) ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>

<style>
    body{
        background-color: #1f1f1f;
    }

    .text{
        display: flex;
        margin-right: 58%;
        justify-content: center;
        text-align: center;
        flex-direction: column;
        margin-bottom: 40px;
        color: #bdbdbd;
    }

    .text a{
        text-decoration: none;
    }

    .flex-shrink-0{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 35%;
    }

    #header{
        display: none;
    }

    label{
        display: none;
    }

    #login-form{
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .btn{
        background-color: #8d8d8d;
        color: black;
        border-color: #8d8d8d;
    }

    .btn:hover{
        background-color: #4d5154;
        border-color: #8d8d8d;
    }

</style>