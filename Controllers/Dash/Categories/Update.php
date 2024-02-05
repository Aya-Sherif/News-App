<?php
require_once("../../../APP/config.php");
$row = dbRow("categories", "id", getInput('id'));

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
        $errors[] = is_Defiend('categories', ['name' => $name]);
    }

    if (empty($errors)) {
        dbUpdate('categories', ['name' => $name], $row['id']);

        $success = "Updated Successfully ❤️";
        setSession('Success', $success);
        Redirect('../../../Views/Dashboard/Categories/Index.php');

    } else {
        setSession('errors', $errors);
        //echo "3adel el error";
        header("location:" . URL . "Views/Dashboard/Categories/Edit.php?id=" . $row['id']);

    }

}
