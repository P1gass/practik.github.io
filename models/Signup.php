<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $password_repeat
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $middle_name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $access_token
 * @property string|null $auth_key
 * @property int|null $role
 * @property int|null $created_at
 * @property int|null $updated_at
 */

class Signup extends \yii\db\ActiveRecord
{
    public $password_repeat;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'name', 'middle_name', 'surname', 'phone', 'email'], 'required'],
            [['name', 'surname', 'middle_name'], 'string', 'max' => 55],
            [['phone'], 'string', 'max' => 21],
            [['email'], 'string', 'max' => 50],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Пароли не совпадают" ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'password' => 'Пароль',
            'password_repeat' => 'Повтор пароля',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'middle_name' => 'Отчество',
            'phone' => 'Номер телефона',
            'email' => 'Почта',
            'access_token' => 'Acces Token',
            'auth_key' => 'Auth Key',
            'role' => 'Роль',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function signup()
    {
        $user=new User();
        $user->username=$this->username;
        $user->password=Yii::$app->getSecurity()->generatePasswordHash($this->password);
        $user->surname=$this->surname;
        $user->name=$this->name;
        $user->middle_name=$this->middle_name;
        $user->email=$this->email;
        $user->access_token=\Yii::$app->getSecurity()->generateRandomString();
        $user->auth_key=\Yii::$app->getSecurity()->generateRandomString();
        $user->phone=$this->phone;
        return $user->save();
    }
}
