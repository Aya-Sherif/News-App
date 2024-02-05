<?php

define("MAIN_PATH", dirname(dirname(__FILE__) . DIRECTORY_SEPARATOR));
define("URL", "http://127.0.0.1/G-391/News_App/");
require_once(MAIN_PATH . "/APP/Validation.php");
require_once(MAIN_PATH . "/APP/Sessions.php");
require_once(MAIN_PATH . "/APP/DB.php");
require_once(MAIN_PATH . "/APP/Request.php");
require_once(MAIN_PATH . "/APP/Respons.php");
require_once(MAIN_PATH . "/APP/Helpers.php");

session_start();
?>