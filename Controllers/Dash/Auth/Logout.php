<?php
include("../../../App/config.php");

session_destroy();
Redirect("../../../Views/Front/Home.php");
die();
?>