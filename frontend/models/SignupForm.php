<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $firstname;
    public $lastname;
    public $phone;
    public $birthday;
    public $address;
    public $Country;
    public $education;
    public $img;
    public $email;
    public $password;
    public $confim;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
              ['firstname', 'string'],
              ['lastname', 'string'],
              ['address', 'string'],
              ['Country', 'string'],
              ['education', 'string'],
              ['phone','string'],
              ['birthday','required'],
              ['img','string'],


             // ['password','compare', 'compareAttribute'=>'confim'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
         $user = new User();
         $user->username = $this->username;
         $user->firstname=$this->firstname;
         $user->lastname=$this->lastname;
         $user->phone=$this->phone;
        $user->birthday= $this->birthday;
         $user->address=$this->address;
         $user->Country=$this->Country;
         $user->education=$this->education;
         $user->img= "T";
      
        $user->email = $this->email;
      $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
