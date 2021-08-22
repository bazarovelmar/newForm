<?php


class Validation extends AuthCheck
{

    public $email;
    public function __construct($email)
    {
        $this->email = $email;
    }

    public function checkValidation() {
        $valid = filter_var($this->email, FILTER_VALIDATE_EMAIL);
        return $valid;
    }

}
