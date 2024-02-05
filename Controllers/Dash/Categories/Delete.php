<?php

require_once("../../../APP/config.php");
$row = dbRow("categories", "id", getInput('id'));
$articlesRelated = dbRows("articles", ['category_id' => getInput('id')]);
if (count($articlesRelated) == 0) {
    echo
        dbDelete('categories', $row['id']);
    Redirect('../../../Views/Dashboard/Categories/Index.php');

} else {
    foreach ($articlesRelated as $article) {
        dbUpdate('articles', ['category_id' => 0], $article['id']);
        Redirect('../../../Views/Dashboard/Categories/Index.php');


    }
}


