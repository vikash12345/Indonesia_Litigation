<?php
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
       
for($page = 1; $page <2; $page++)
{
    	$linkcreate	=	'http://putusan.mahkamahagung.go.id/direktori/index-'.$page.'.html';
	$pageload = file_get_contents($linkcreate);
	if($pageload)
	{
	echo $pageload;
	}
}
   
	
	  
	  
	  
	  
	



	  
	  
	  
	
	  
?>
