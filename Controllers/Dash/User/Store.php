<?php
require_once("../../../App/config.php");

if (CheckPostMethod()) {
    $errors = [];
    foreach ($_POST as $key => $value) {
        $$key = reciveInput($value);
    }
    if (requiredInput($name)) {
        $errors[] = "Where is the name ? 🙄";
    } elseif (MineInput($name, 3) || MaxInput($name, 30)) {
        $errors[] = "Write a valid length name 😊";
    }
    if (requiredInput($username)) {
        $errors[] = "Please, Enter username 😐";
    } elseif (MineInput($username, 3) || MaxInput($username, 30)) {
        $errors[] = "Write a valid length for username 😊";
    } elseif (is_Defiend('users', ['username' => $username])) {
        $errors[] = is_Defiend('users', ['username' => $username]);
    }
    if (requiredInput($password)) {
        $errors[] = "Where is the password ? 🙄";
    } elseif (MineInput($password, 6) || MaxInput($password, 30)) {
        $errors[] = "The password didn't met the required lenght, Enter a valid one 😊";
    }
    if (requiredInput($role)) {
        $errors[] = "choose the user role";
    }
    if (empty($errors)) {
        dbinseret('users', ['name' => $name, 'id' => null, 'username' => $username, 'role' => $role, 'password' => password_hash($password, PASSWORD_DEFAULT), 'status' => 'Active']);
        $success = "User Added Successfully ❤️";
        setSession('Success', $success);
        Redirect('../../../Views/Dashboard/Users/Index.php');

    } else {
        setSession('errors', $errors);
        Redirect('../../../Views/Dashboard/Users/Add.php');
    }


}