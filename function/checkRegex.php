<?php

function isValidEmail($email)
{
    $regexEmail = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexEmail,$email)){
        throw new Exception('Invalid Email format(xxx@xxxx.com)');
        return false;
    }
    return true;

}

function isValidPhoneNumber($phoneNumber)
{
    $regexPhone = '/^([0-9]){10,}$/';
    if (!preg_match($regexPhone,$phoneNumber)){
        throw new Exception('Invalid Phone number format');
        return false;
    }
    return true;
}

function isValidPassword($password)
{
    $regexPassword = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';
    if (!preg_match($regexPassword,$password)){
        throw new Exception('Invalid Password');
        return false;
    }
    return true;
}

