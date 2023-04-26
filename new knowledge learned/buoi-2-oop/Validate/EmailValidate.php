<?php

class EmailValidate
{

    public function passValidate($filedname, $valueRule)
    {
        if (filter_var($valueRule, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public function getMessage($filedname)
    {
        return $filedname . 'email k hop le';
    }
}