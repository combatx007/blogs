<?php
$dblocation = "localhost";
  // ��� ���� ������, �� �������� ��� ��������� ������
  $dbname = "blog";
  // ��� ������������ ���� ������
  $dbuser = "root";
  // � ��� ������
  $dbpasswd = "combat123654";
  // ������������� ���������� � ����� ������
  $dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
  if(!$dbcnx)
    exit("<P>� ��������� ������ ������ ���� ������ ��
          ��������, ������� ���������� �����������
          �������� ����������.</P>" );
  // �������� ���� ������
  if(! @mysql_select_db($dbname,$dbcnx))
    exit("<P>� ��������� ������ ���� ������ �� ��������,
          ������� ���������� ����������� ��������
          ����������.</P>" );

  @mysql_query("SET NAMES 'cp1251'");

  if(!function_exists('get_magic_quotes_gpc'))
  {
    function get_magic_quotes_gpc()
    {
      return false;
    }
  }
?>