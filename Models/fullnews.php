<?php
namespace Models;
require_once('auth.php');
require_once('autoload.php');
//класс отвечающий за вывод заголовка и текста для соответствующего id
class fullnews
{
    public $title;
    public $art;
//метод вывода заголовка
    public function title()
    {
        $query="SELECT id FROM news";   //запрос для выборки всех id
        $row=mysql_query($query);
        $rows=mysql_num_rows($row);  //считаем количество id
        $title_sql=mysql_query("SELECT title FROM news"); //запрос для выборки всех заголовков
        while (0<$rows)
        {
            $rows--;
            $sqlar=mysql_fetch_assoc($row);  //создаем массив $sqlar с id
            $sqltitle=mysql_fetch_assoc($title_sql); //создаем массим с заголовками
            //заносим все $id
            foreach ($sqlar as $id)
            {   //заносим все заголовки в $title
                foreach ($sqltitle as $title)
                {
                    if (@$_GET['page']==$id)    //условие для вывода информации на сстранице соответствуещей id в бд
                    echo $title;
                }
            }
        }
    }
    public function article()          //метод для вывода текста
    {
        $query="SELECT id FROM news";  //считаем количество id
        $row=mysql_query($query);
        $rows=mysql_num_rows($row);
        $article=mysql_query("SELECT text FROM news");  //выборка текста
        while (0<$rows)
        {
            $rows--;
            $sqlar=mysql_fetch_assoc($row);
            $sqlart=mysql_fetch_assoc($article);  //выборка статей
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
    public function annonce()          //метод для вывода анонса
    {
        $query="SELECT id FROM news";  //считаем количество id
        $row=mysql_query($query);
        $rows=mysql_num_rows($row);
        $article=mysql_query("SELECT annonce FROM news");  //выборка текста
        while (0<$rows)
        {
            $rows--;
            $sqlar=mysql_fetch_assoc($row);
            $sqlart=mysql_fetch_assoc($article);  //выборка статей
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
    public function date()          //метод для вывода даты
    {
        $query="SELECT id FROM news";  //считаем количество id
        $row=mysql_query($query);
        $rows=mysql_num_rows($row);
        $date=mysql_query("SELECT DATE_FORMAT(date,'%Y-%m-%d %T') FROM news");  //выборка даты
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