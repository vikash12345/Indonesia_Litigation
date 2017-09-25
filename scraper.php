<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

 require 'scraperwiki.php';
 require 'scraperwiki/simple_html_dom.php';
//
 for($i = 1; $i < 2; $i++)
{
	$link = 'https://putusan.mahkamahagung.go.id/direktori/index-'.$i.'.html';
	$linkpages = file_get_html($link);
	if($linkpages)
	{
		foreach($linkpages->find("//table[@class='tabledata']/tbody/tr/a") as $element)
		{		
			if(strpos($element->href, "https://putusan.mahkamahagung.go.id/putusan"))
			{
				$linkpages = file_get_html($element->href);
				foreach($linkpages->find("/html/body/div/div/table/tbody/tr[2]/td/div[1]/div[2]") as $details)
				{
					//This is for Case Heading.
					$caseheading	=	$details->find("b",0)->plaintext;
					
					
					//Checking Nomor
					$checknomor 	=	$details->find("/table[1]/tbody/tr[1]/td[1]",0)->plaintext;
					echo $checknomor.'<br/>';
						
				}
				
		}	}
	}
	  
}	

?>
