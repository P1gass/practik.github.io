<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>
<h5 class="text">
    Если уже существует аккаунт, вы можете <a href="http://localhost/practic/web/site/login">Авторизоваться</a>
</h5>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Логин']) ?>
            <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Имя']) ?>
            <?= $form->field($model, 'surname')->textInput(['autofocus' => true, 'placeholder' => 'Фамилия']) ?>
            <?= $form->field($model, 'middle_name')->textInput(['autofocus' => true, 'placeholder' => 'Отчество']) ?>
            <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::class, [
                'mask' => '+7(999)-999-9999']) ?>
            <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'Email']) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль']) ?>
            <?= $form->field($model, 'password_repeat')->passwordInput(['placeholder' => 'Повтор пароля']) ?>


            <div class="form-group">
                <div>
                    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
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