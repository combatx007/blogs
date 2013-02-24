<?php
namespace editnews;
use Models\edit_article;
use Models\update_article;
require_once('autoload.php');
require_once('auth.php');
$edit = new edit_article();
$edit->text();
$db_add = new update_article();
$db_add->update_news();
?>