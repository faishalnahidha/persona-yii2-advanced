<?php
namespace frontend\models;

use yii\base\Model;
use yii\db\ActiveRecord;
use common\models\Customer;

/**
 * Signup form
 */
class SignupForm extends ActiveRecord
{
    public $username;
    public $nama_lengkap;
    public $email;
    public $password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\Customer', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            
            ['nama_lengkap', 'required'],
            ['nama_lengkap', 'string', 'min' => 4, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\Customer', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return Customer|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new Customer();
        $user->username = $this->username;
        $user->nama_lengkap = $this->nama_lengkap;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
                
        return $user->save() ? $user : null;
    }
    
}
