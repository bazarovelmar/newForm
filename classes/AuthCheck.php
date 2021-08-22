<?php



class AuthCheck
{

    public $email;
    public $password;
    public $passwordRepeat;

    public function __construct($email, $password, $passwordRepeat)
    {
        $this->email = $email;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
    }

    public function checkAuthInfo()
    {
        $users = require(__DIR__ . '/../users.php');
        foreach ($users as $user) {
            $check = $this->email == $user['email'] && $this->password == $user['password'] && $this->passwordRepeat == $user['password'];
            return $check;
        }
    }

}
