<?php
function __autoload($class_name)
{
	$pathfile=str_replace('\\', '/', $class_name);
    require_once($pathfile . '.php');
	require_once('dbconfig.php');
}