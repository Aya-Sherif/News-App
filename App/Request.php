<?php

function getRequestType()
{
    return $_SERVER['REQUEST_METHOD'];
}

function CheckPostMethod()
{
    if (getRequestType() == "POST") {
        return TRUE;
    } else
        return FALSE;
}

function isGetMethod()
{
    return getRequestType() == "GET";
}


function reciveInput($value)
{
    return trim(htmlentities(htmlspecialchars($value)));
}
function getInput($name)
{
    return trim(htmlentities(htmlspecialchars($_GET[$name])));
}
function getUser($key)
{
    if (IsDefined($key)) {
        $user = getSession($key);
        return $user;
    } else {
        return [];
    }
}