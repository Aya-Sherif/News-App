<?php 


require_once("../../../APP/config.php");
$row = dbRow("categories", "id", getInput('id'));
dbDelete('categories',$row['id']);
Redirect('../../../Views/Dashboard/Categories/Index.php');


