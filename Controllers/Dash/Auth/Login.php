<?php
require_once("../../../APP/Config.php");




if (CheckPostMethod()) {
    $errors = [];
    foreach ($_POST as $key => $value) {
        $$key = reciveInput($value);
    }
    $user = dbRow('users', "username", $username);
    if (requiredInput($username)) {
        $errors[] = 'Please write your email';
    }
    var_dump($user['status']);
    if ($user['status'] == 'inactive') {

        $errors[] = 'You are hold, Contact the admin for more details.';
    }
    if (requiredInput($password)) {
        $errors[] = 'Please write  password';
    }


    if (empty($errors)) {
        $user = dbRow('users', 'id', handleLogin($username, $password));

        $user = [
            'id' => handleLogin($username, $password),
            'role' => $user['role'],
            'name' => $user['name'],
            'username' => $user['username'],
            'status' => $user['status']


        ];
        if (handleLogin($username, $password)) {
            setSession('user', $user);
            header('location:../../../Views/Dashboard/Categories/Index.php');
        } else {
            $errors[] = "Invalid User or Password";
            setSession('errors', $errors);
            header("location:../../../Views/Dashboard/Auth/Login.php");

        }
    } else {
        setSession('errors', $errors);
        header("location:../../../Views/Dashboard/Auth/Login.php");
    }

}
