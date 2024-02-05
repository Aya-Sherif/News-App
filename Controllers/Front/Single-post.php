<?php
require_once("../../App/config.php");


$NumViews = getSession('post')['number_of_views'];
if (IsDefined('user')) {
    // Check if 'id' parameter is set in the GET request
    if (getUser('user')['role'] == 'admin' || getUser('user')['id'] == getSession('post')['user_id']) {
        removeSession('post');
    } else {
        $NumViews += 1;
        dbUpdate('articles', ['number_of_views' => $NumViews], getSession('post')['id']);
    }
} else {
    $NumViews += 1;
    dbUpdate('articles', ['number_of_views' => $NumViews], getSession('post')['id']);
}

