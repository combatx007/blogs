<?php
namespace Models;
require_once('auth.php');
require_once('autoload.php');
//класс отвечающий за вывод заголовка и текста для соответствующего id
class edit_article
{
    public $title;
    public $art;
	public $annonce;
//метод вывода заголовка
    static function title()
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
                    return $title;
                }
            }
        }
    }
    static function article()          //метод для вывода текста
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
                    return $art;
                }
            }
          }
    }
    static function annonce()          //метод для вывода анонса
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
                foreach ($sqlart as $annonce)
                {
                    if (@$_GET['page']==$id)
                    return $annonce;
                }
            }
          }
    }
	function __toString()
	{
		self::title;
		self::art;
		self::annonce;
	}
	public function text()
	{
		form::startform();
		form::textarea('title',80,2,self::title());
		form::textarea('annonce',80,5,self::annonce());
		form::textarea('text',80,20,self::article());
		form::submit();
		form::endform();
	}
}
?>