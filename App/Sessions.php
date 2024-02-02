<?php


function setSession($key, $value)
{
    $_SESSION[$key] = $value;
}

function getSession($key)
{
    return $_SESSION[$key] ?? [];
}
function IsDefined($key)
{
    if (isset($_SESSION[$key])) {
        return true;
    } else {
        return false;
    }
}
function removeSession($key)
{
    if (isset($_SESSION[$key])) {
        unset($_SESSION[$key]);
    }
}
?>