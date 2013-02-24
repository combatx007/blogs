<?php
$dblocation = "localhost";
  // »м€ базы данных, на хостинге или локальной машине
  $dbname = "blog";
  // »м€ пользовател€ базы данных
  $dbuser = "root";
  // и его пароль
  $dbpasswd = "combat123654";
  // ”станавливаем соединение с базой данных
  $dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
  if(!$dbcnx)
    exit("<P>¬ насто€щий момент сервер базы данных не
          доступен, поэтому корректное отображение
          страницы невозможно.</P>" );
  // ¬ыбираем базу данных
  if(! @mysql_select_db($dbname,$dbcnx))
    exit("<P>¬ насто€щий момент база данных не доступна,
          поэтому корректное отображение страницы
          невозможно.</P>" );

  @mysql_query("SET NAMES 'cp1251'");

  if(!function_exists('get_magic_quotes_gpc'))
  {
    function get_magic_quotes_gpc()
    {
      return false;
    }
  }
?>