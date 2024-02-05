<?php

require_once("../../../APP/config.php");
$row = dbRow("articles", "id", getInput('id'));
dbDelete('articles', $row['id']);
Redirect('../../../Views/Dashboard/Posts/Index.php');


?>