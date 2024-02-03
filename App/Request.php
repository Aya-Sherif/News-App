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


function reciveInput($value)
{
    return trim(htmlentities(htmlspecialchars($value)));
}
function getInput($name)
{
    return trim(htmlentities(htmlspecialchars($_GET[$name])));
}
function getUseRrole($key)
{
    if (IsDefined($key)) {
        $user_id = getSession($key);
        $user = dbRow('users', 'id', $user_id);
        return $user;
    } else {
        die("User Not Exist");

    }
}