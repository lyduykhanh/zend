<?php
define("APPLICATION_PATH",'application');
set_include_path(APPLICATION_PATH."/../library");
require_once("Zend/Application.php");
$app=new Zend_Application("production",APPLICATION_PATH."/configs/application.ini");
$app->bootstrap()->run();