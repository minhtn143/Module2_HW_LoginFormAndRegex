<?php

function isValidEmail($email)
{
    $regexEmail = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';

    return preg_match_all($regexEmail, $email) ? true : false;

}

function isValidPhoneNumber($phoneNumber)
{
    $regexPhone = '/^([0-9]){10}\S$/';
    return preg_match($regexPhone, $phoneNumber) ? true : false;
}

function isValidPassword($password)
{
    $regexPassword = '/^(.[0-9]+[A-Z]+\W+){8}\S$/';
    return preg_match($regexPassword, $password) ? true : false;
}

function checkRegex($email, $phoneNumber, $password)
{
    return isValidEmail($email) && isValidPhoneNumber($phoneNumber) &&
        isValidPassword($password);
}