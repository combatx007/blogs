<?php
namespace Models;
require_once('auth.php');
require_once('autoload.php');
//����� ���������� �� ����� ��������� � ������ ��� ���������������� id
class fullnews
{
    public $title;
    public $art;
//����� ������ ���������
    public function title()
    {
        $query="SELECT id FROM news";   //������ ��� ������� ���� id
        $row=mysql_query($query);
        $rows=mysql_num_rows($row);  //������� ���������� id
        $title_sql=mysql_query("SELECT title FROM news"); //������ ��� ������� ���� ����������
        while (0<$rows)
        {
            $rows--;
            $sqlar=mysql_fetch_assoc($row);  //������� ������ $sqlar � id
            $sqltitle=mysql_fetch_assoc($title_sql); //������� ������ � �����������
            //������� ��� $id
            foreach ($sqlar as $id)
            {   //������� ��� ��������� � $title
                foreach ($sqltitle as $title)
                {
                    if (@$_GET['page']==$id)    //������� ��� ������ ���������� �� ��������� ��������������� id � ��
                    echo $title;
                }
            }
        }
    }
    public function article()          //����� ��� ������ ������
    {
        $query="SELECT id FROM news";  //������� ���������� id
        $row=mysql_query($query);
        $rows=mysql_num_rows($row);
        $article=mysql_query("SELECT text FROM news");  //������� ������
        while (0<$rows)
        {
            $rows--;
            $sqlar=mysql_fetch_assoc($row);
            $sqlart=mysql_fetch_assoc($article);  //������� ������
            foreach ($sqlar as $id)
            {
                foreach ($sqlart as $art)
                {
                    if (@$_GET['page']==$id)
                    echo $art;
                }
            }
          }
    }
    public function annonce()          //����� ��� ������ ������
    {
        $query="SELECT id FROM news";  //������� ���������� id
        $row=mysql_query($query);
        $rows=mysql_num_rows($row);
        $article=mysql_query("SELECT annonce FROM news");  //������� ������
        while (0<$rows)
        {
            $rows--;
            $sqlar=mysql_fetch_assoc($row);
            $sqlart=mysql_fetch_assoc($article);  //������� ������
            foreach ($sqlar as $id)
            {
                foreach ($sqlart as $art)
                {
                    if (@$_GET['page']==$id)
                    echo $art;
                }
            }
          }
    }
    public function date()          //����� ��� ������ ����
    {
        $query="SELECT id FROM news";  //������� ���������� id
        $row=mysql_query($query);
        $rows=mysql_num_rows($row);
        $date=mysql_query("SELECT DATE_FORMAT(date,'%Y-%m-%d %T') FROM news");  //������� ����
        while (0<$rows)
        {
            $rows--;
            $sqlar=mysql_fetch_assoc($row);
            $sqldate=mysql_fetch_assoc($date);
            foreach ($sqlar as $id)
            {
                foreach ($sqldate as $dates)
                {
                    if (@$_GET['page']==$id)
                    echo $dates;
                }
            }
          }
    }
}
?>