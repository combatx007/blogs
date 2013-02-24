<?php
namespace tpl;
use Models\fullnews;
require_once('autoload.php');
$content = new fullnews;
$content->article();
echo "<br><br>";
$content->title();
echo "<br><br>";
$content->annonce();
echo "<br><br>";
$content->date();
?>