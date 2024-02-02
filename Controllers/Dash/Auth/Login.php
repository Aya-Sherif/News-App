<?php
session_start();
require_once("../../../APP/Config.php");




if (CheckPostMethod()) {
    $errors = [];
    foreach ($_POST as $key => $value) {
        $$key = reciveInput($value);
    }



    if (requiredInput($username)) {
        $errors[] = 'Please write your email';
    }

    if (requiredInput($password)) {
        $errors[] = 'Please write  password';
    }

    if (empty($errors)) {
        $user = [
            'username' => $username,
            'password' => sha1($password),
        ];
        if (handleLogin( $username, $password)) {
            setSession('user', handleLogin($username, $password));
           var_dump(getSession('user'));
            $user_id=getSession('user');
           header('location:../../../Views/Dashboard/Categories/Index.php?id='.$user_id);
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
