<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

 require 'scraperwiki.php';
 require 'scraperwiki/simple_html_dom.php';
//
 for($i = 1; $i < 2; $i++)
{
	$link = 'http://putusan.mahkamahagung.go.id/direktori/index-'.$i.'.html';
	$linkpages = file_get_html($link);
	sleep(1000);
	if($linkpages)
	{
		foreach($linkpages->find("//table[@class='tabledata']/tbody/tr/a") as $element)
		{		
			if(strpos($element->href, "http://putusan.mahkamahagung.go.id/putusan"))
			{
				$linkpages = file_get_html($element->href);
				foreach($linkpages->find("/html/body/div/div/table/tbody/tr[2]/td/div[1]/div[2]") as $details)
				
				{
							
							$html_encoded 	= 	html_entity_decode($details);
							$nameofcase 	=	$details->find("b",0)->plaintext;
							$prlink 			=	$element->href;
							
							
							  $record = array( 'profilepage' =>$prlink, 'linkofpage' => $link ,'nameofcase' => $nameofcase,'code' => $html_encoded);
           scraperwiki::save(array('profilepage','linkofpage','nameofcase','code'), $record); 
			   }
				}
				
		}	}
	}
	  

?>
