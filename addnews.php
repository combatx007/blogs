<?php
namespace addnews;
use Models\form;
use Models\add_article;
require_once('autoload.php');
require_once('auth.php');
form::standart_form();
$sqlforms = new add_article();
$sqlforms->addnews();
?>