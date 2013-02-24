<?php
namespace Models;
require_once('auth.php');
class add_article
{
    public $titles;
	public $descs;
	public $texts;
	public function addnews()
	{
		if (isset($_POST['submit']))
		{
			$title=$this->titles=htmlspecialchars($_POST['title'], ENT_QUOTES, 'cp1251');
			$desc=$this->descs=htmlspecialchars($_POST['desc'], ENT_QUOTES, 'cp1251');
			$text=$this->texts=htmlspecialchars($_POST['text'], ENT_QUOTES, 'cp1251');
			$news="INSERT INTO news SET `title`='$title', `annonce`='$desc', `text`='$text'";
			$sqlnews = mysql_query($news);
        }
    }
}
?>