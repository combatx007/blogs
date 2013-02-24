<?php
namespace Models;
require_once('auth.php');
class form   //класс для создания форм
{
	static function startform()
    {
		echo "<form name='addnews' method='post' accept-charset='windows-1251'>";
    }
    static function endform()
    {
		echo '</form>';
    }
    static function text($name='title', $size=106)
    {
		echo "<input type='text' name='$name' size=$size><br><br>";
    }
    static function textarea($name='text',$cols=80,$rows=30,$text='')
    {
		echo "<textarea cols=$cols rows=$rows name='$name'>$text</textarea><br><br>";
    }
    static function submit()
    {
		echo "<input type='submit' name='submit'><br>";
    }
    static function standart_form()
    {
		self::startform();
    	echo "Заголовок:<br><br>";
    	self::text();
    	echo "Статья:<br><br>";
    	self::textarea($name='desc',80,10);
    	self::textarea();
    	self::submit();
    	self::endform();
	}
}
?>