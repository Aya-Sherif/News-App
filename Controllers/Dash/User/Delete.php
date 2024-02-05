<?php


require_once("../../../APP/config.php");
$row = dbRow("users", "id", getInput('id'));
dbDelete('users', $row['id']);
Redirect('../../../Views/Dashboard/Users/Index.php');


