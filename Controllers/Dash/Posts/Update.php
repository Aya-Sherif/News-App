<?php
require_once("../../../APP/config.php");

if (CheckPostMethod()) {
    $errors = [];
    foreach ($_POST as $key => $value) {
        $$key = reciveInput($value);
    }
    if(dbRow("articles", "id", getInput('id'))){
    $row = dbRow("articles", "id", getInput('id'));
    }else
    {
        $errors[]="Invalid ID";
    }
    if (empty($errors)) {
        echo $row['id'];
        $user_role=getSession('user')['role'];
        if($user_role=='admin')
        {
        dbUpdate('articles', ['category_id' => $Category, 'status' => $statue], $row['id']);
        }else
        {
            dbUpdate('articles', ['description'=>$content], $row['id']);

        }
        $success = "Updated Successfully ❤️";
        setSession('Success', $success);
        Redirect('../../../Views/Dashboard/Posts/Index.php?');

    } else {
        setSession('errors', $errors);
        header("location:" . URL . "Views/Dashboard/Posts/Edit.php?id=" . $row['id']);

    }

}
