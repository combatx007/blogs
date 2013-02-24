<?php
namespace Models;
require_once('auth.php');
class update_article
{
    public $titles;
	public $annonces;
	public $texts;
	public function update_news()
	{
		if (isset($_POST['submit']))
		{
			$id=$_GET['page'];
			$title=$this->titles=htmlspecialchars($_POST['title'], ENT_QUOTES, 'cp1251');
			$annonce=$this->annonces=htmlspecialchars($_POST['annonce'], ENT_QUOTES, 'cp1251');
			$text=$this->texts=htmlspecialchars($_POST['text'], ENT_QUOTES, 'cp1251');
			$news="UPDATE news SET `title`='$title', `annonce`='$annonce', `text`='$text' WHERE `id`='$id'";
			$sqlnews = mysql_query($news);
        }
    }
}
?>