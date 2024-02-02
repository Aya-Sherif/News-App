<?php

//this function is used to check if the user input the value or not 
function requiredInput($value)
{
    if (empty($value)) {
        return true;
    }
    return false;
}

//max and mine function used to check if the the input within a specific range or not 
function MineInput($value,$length)
{
    if (!requiredInput($value)) {
        if (strlen($value) < $length) {
            return true;
        } else {
            return false;
        }
    }
}

function MaxInput($value, $length)
{
    if (!requiredInput($value)) {
        if (strlen($value) > $length) {
            return true;
        } else {
            return false;
        }
    }
}
function santInput($value)
{
    $str=trim($value);
    $str= filter_var($str,FILTER_SANITIZE_STRING);
    return$str;
}
function santEmail($email)
{
    $str=trim($email    );
    $str= filter_var($str,FILTER_SANITIZE_EMAIL);
    return$str;
}
//this function is used to check if the user enter a valid email or not 
function EmailValidation($email)
{
    if (!requiredInput($email)) {
        if (!santEmail($email)) {
            return true;
        } else {
            return false;
        }

    }
}
//This function used to check if the two passwords is the same or not 
function passwordConfirmation($password, $confirm)
{
    if ($password === $confirm) {
        return true;
    } else {
        return false;
    }
}



