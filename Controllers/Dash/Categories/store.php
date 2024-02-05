<?php
require_once("../../../APP/config.php");

if (CheckPostMethod()) {
    $errors = [];
    foreach ($_POST as $key => $value) {
        $$key = reciveInput($value);
    }

    if (requiredInput($name)) {
        $errors[] = 'Please write Category name 😐';
    } elseif (MineInput($name, 3)) {
        $errors[] = 'Name must be grater than 3 ';

    } elseif (MaxInput($name, 30)) {
        $errors[] = ' Name must be Shorter than 30 ';

    } elseif (is_Defiend('categories', ['name' => $name])) {
        echo is_Defiend('categories', ['name' => $name]);

        $errors[] = is_Defiend('categories', ['name' => $name]);
    }
    if (empty($errors)) {
        dbinseret('categories', ['name' => $name, 'id' => null]);

        $success = "Added Successfully ❤️";
        setSession('Success', $success);
        Redirect('../../../Views/Dashboard/Categories/Index.php');

    } else {
        echo "error";
        setSession('errors', $errors);
        Redirect('../../../Views/Dashboard/Categories/Add.php');

    }

}
