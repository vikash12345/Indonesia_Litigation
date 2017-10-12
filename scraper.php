<?php
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
 for($i = 1; $i < 2; $i++)
{
	$link = 'http://putusan.mahkamahagung.go.id/direktori/index-'.$i.'.html';
	$pageload 	=	file_get_html($link);
	if($pageload)
	{
		foreach($pageload->find("//table[@class='tabledata']/tbody/tr/a") as $element)
		{								 
			if(strstr($element->href, "https://putusan.mahkamahagung.go.id/putusan"))
			{
				$innerpage	=	file_get_html($element->href);
				{
					$Match		=	$innerpage->find("//td[plaintext^=Jenis Perkara]", 0);
					echo $element->href.' This is link =>  ' .$Match->next_sibling().'<br/>';
				}
			}
		}
	}
	
}
	  
?>
