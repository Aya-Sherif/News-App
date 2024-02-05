<?php
require_once("../../../APP/config.php");

$row = dbRow("users", "id", getInput('id'));
var_dump($row);

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
    } elseif ($row['username'] != $username) {
        echo "Ana henaaaaaaaa";
        if (is_Defiend('users', ['username' => $username])) {
            $errors[] = is_Defiend('users', ['username' => $username]);
        } elseif (MineInput($username, 3) || MaxInput($username, 30)) {
            $errors[] = "Write a valid length for username 😊";
        }
    }
    if (requiredInput($password)) {
        $errors[] = "Where is the password ? 🙄";
    } elseif (!password_hash($password, PASSWORD_DEFAULT) == $row['password']) {
        if (MineInput($password, 6) || MaxInput($password, 30)) {
            $errors[] = "The password didn't met the required lenght, Enter a valid one 😊";
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
        }

    }
    if (requiredInput($role)) {
        $errors[] = "choose the user role";
    }

    if (empty($errors)) {
        dbUpdate('users', ['name' => $name, 'username' => $username, 'role' => $role, 'status' => $status, 'password' => $password], $row['id']);

        $success = "Updated Successfully ❤️";
        setSession('Success', $success);
        Redirect('../../../Views/Dashboard/Users/Index.php');

    } else {
        setSession('errors', $errors);
        header("location:" . URL . "Views/Dashboard/Users/Edit.php?id=" . $row['id']);

    }

}
