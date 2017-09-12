<?php

namespace frontend\models;

use Yii;
use yii\base\NotSupportedException;
use yii\base\Model;


/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property integer $firstname
 * @property integer $lastname
 * @property integer $phone
 * @property integer $address
 * @property integer $Country
 * @property integer $education
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $birthday
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{ 
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'firstname', 'lastname'],'required'],
         
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],

            [['firstname','lastname','address','education'],'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'phone' => 'Phone',
            'address' => 'Address',
            'Country' => 'Country',
            'education' => 'Education',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'con_id' => 'Con ID',
            'img'   => 'IMG',
            'status' => 'Status',
            'birthday'=>'birthday',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @inheritdoc
     */


    public static function findIdentity($id)
    {
        return static::findOne($id);
    }


    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }





}
