<?php
namespace Models;
require_once('auth.php');
require_once('autoload.php');
//����� ���������� �� ����� ��������� � ������ ��� ���������������� id
class edit_article
{
    public $title;
    public $art;
	public $annonce;
//����� ������ ���������
    static function title()
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
                    return $title;
                }
            }
        }
    }
    static function article()          //����� ��� ������ ������
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
                    return $art;
                }
            }
          }
    }
    static function annonce()          //����� ��� ������ ������
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