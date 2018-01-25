<?php
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
       
$cHeadres = array(
      'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
      'Accept-Language: en-US,en;q=0.5',
      'Connection: Keep-Alive',
      'Pragma: no-cache',
      'Cache-Control: no-cache'
     );


     function dlPage($link) {
        global $cHeadres;
        $ch = curl_init();
        if($ch){
         curl_setopt($ch, CURLOPT_URL, $link);
         curl_setopt($ch, CURLOPT_HTTPHEADER, $cHeadres);
         curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt');
         curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
         curl_setopt($ch, CURLOPT_HEADER, false);
         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
         curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)");
         $str = curl_exec($ch);
         curl_close($ch);
         $dom = new simple_html_dom();
         $dom->load($str);
         return $dom;
        }
       }
       
for($page = 1; $page <2; $page++)
{
    	$link	=	'http://putusan.mahkamahagung.go.id/direktori/index-'.$page.'.html';
	$pageload = dlPage($link);
	if($pageload)
	{
	foreach($pageload->find("//table[@class='tabledata']/tbody/tr/a") as $element)
		{								 
			if(strstr($element->href, "https://putusan.mahkamahagung.go.id/putusan"))
			{
				$innerpage	=	dlPage($element->href);
					
					sleep(5);
				if($innerpage)
				{
					///This is for Nomor
					$nomor			=	$innerpage->find("//td[plaintext^=Nomor]", 0);
					if($nomor == null || $nomor == "")
					{
						$nomor	=	"Not Available";
					}
					else
					{
						$nomor	=	$nomor->next_sibling()->plaintext;
					}
					
					
					
					//This is for Tingkat
					$Tingkat_Proses			=	$innerpage->find("//td[plaintext^=Tingkat Proses]", 0);
					if($Tingkat_Proses == null || $Tingkat_Proses == "")
					{
						$Tingkat_Proses	=	"Not Available";
					}
					else
					{
						$Tingkat_Proses	=	$Tingkat_Proses->next_sibling();
					}
					
					
					//This is for Tanggal_Register
					$Tanggal_Register		=	$innerpage->find("//td[plaintext^=Tanggal Register]", 0);
					if($Tanggal_Register == null || $Tanggal_Register == "")
					{
						$Tanggal_Register	=	"Not Available";
					}
					else
					{
						$Tanggal_Register	=	$Tanggal_Register->next_sibling();
					}
					
					
					//This is for Tahun_Register
					$Tahun_Register		=	$innerpage->find("//td[plaintext^=Tahun Register]", 0);
					if($Tahun_Register == null || $Tahun_Register == "")
					{
						$Tahun_Register	=	"Not Available";
					}
					else
					{
						$Tahun_Register	=	$Tahun_Register->next_sibling();
					}
					
					
					//This is for Jenis Perkara	
					$Jenis_Perkara		=	$innerpage->find("//td[plaintext^=Jenis Perkara]", 0);
					if($Jenis_Perkara == null || $Jenis_Perkara == "")
					{
						$Jenis_Perkara	=	"Not Available";
					}
					else
					{
						$Jenis_Perkara	=	$Jenis_Perkara->next_sibling();
					}
					
					
					//This is for Klasifikasi	
					$Klasifikasi		=	$innerpage->find("//td[plaintext^=Klasifikasi]", 0);
					if($Klasifikasi == null || $Klasifikasi == "")
					{
						$Klasifikasi	=	"Not Available";
					}
					else
					{
						$Klasifikasi	=	$Klasifikasi->next_sibling();
					}
					
							
					//This is for Sub Klasifikasi
					$Sub_Klasifikasi		=	$innerpage->find("//td[plaintext^=Sub Klasifikasi]", 0);
					if($Sub_Klasifikasi == null || $Sub_Klasifikasi == "")
					{
						$Sub_Klasifikasi	=	"Not Available";
					}
					else
					{
						$Sub_Klasifikasi	=	$Sub_Klasifikasi->next_sibling();
					}
					
					//This is for Jenis Lembaga Peradilan
					$Jenis_Lembaga_Peradilan		=	$innerpage->find("//td[plaintext^=Jenis Lembaga Peradilan]", 0);
					if($Jenis_Lembaga_Peradilan == null || $Jenis_Lembaga_Peradilan == "")
					{
						$Jenis_Lembaga_Peradilan	=	"Not Available";
					}
					else
					{
						$Jenis_Lembaga_Peradilan	=	$Jenis_Lembaga_Peradilan->next_sibling();
					}
					
					//This is for Lembaga Peradilan	
					$Lembaga_Peradilan		=	$innerpage->find("//td[plaintext^=Lembaga Peradilan]", 0);
					if($Lembaga_Peradilan == null || $Lembaga_Peradilan == "")
					{
						$Lembaga_Peradilan	=	"Not Available";
					}
					else
					{
						$Lembaga_Peradilan	=	$Lembaga_Peradilan->next_sibling();
					}
					
					//This is for Para Pihak
					$Para_Pihak		=	$innerpage->find("//td[plaintext^=Para Pihak]", 0);
					if($Para_Pihak == null || $Para_Pihak == "")
					{
						$Para_Pihak	=	"Not Available";
					}
					else
					{
						$Para_Pihak	=	$Para_Pihak->next_sibling();
					}
					
					//This is for Tahun
					$Tahun		=	$innerpage->find("//td[plaintext^=Tahun]", 0);
					if($Tahun == null || $Tahun == "")
					{
						$Tahun	=	"Not Available";
					}
					else
					{
						$Tahun	=	$Tahun->next_sibling();
					}
					
					//This is for Tanggal Musyawarah
					$Tanggal_Musyawarah		=	$innerpage->find("//td[plaintext^=Tanggal Musyawarah]", 0);
					if($Tanggal_Musyawarah == null || $Tanggal_Musyawarah == "")
					{
						$Tanggal_Musyawarah	=	"Not Available";
					}
					else
					{
						$Tanggal_Musyawarah	=	$Tanggal_Musyawarah->next_sibling();
					}
					//This is for Tanggal Dibacakan	
					$Tanggal_Dibacakan			=	$innerpage->find("//td[plaintext^=Tanggal Dibacakan]", 0);
					if($Tanggal_Dibacakan == null || $Tanggal_Dibacakan == "")
					{
						$Tanggal_Dibacakan	=	"Not Available";
					}
					else
					{
						$Tanggal_Dibacakan	=	$Tanggal_Dibacakan->next_sibling();
					}
					
					
					//This is for Amar
					$Amar			=	$innerpage->find("//td[plaintext^=Amar]", 0);
					if($Amar == null || $Amar == "")
					{
						$Amar	=	"Not Available";
					}
					else
					{
						$Amar	=	$Amar->next_sibling();
					}
					
					//This is for Catatan Amar
					$Catatan_Amar			=	$innerpage->find("//td[plaintext^=Catatan Amar]", 0);
					if($Catatan_Amar == null || $Catatan_Amar == "")
					{
						$Catatan_Amar	=	"Not Available";
					}
					else
					{
						$Catatan_Amar	=	$Catatan_Amar->next_sibling();
					}
					
					//This is for Hakim
					$Hakim			=	$innerpage->find("//td[plaintext^=Hakim]", 0);
					if($Hakim == null || $Hakim == "")
					{
						$Hakim	=	"Not Available";
					}
					else
					{
						$Hakim	=	$Hakim->next_sibling();
					}
					
					//This is for Hakim Ketua	
					$Hakim_Ketua			=	$innerpage->find("//td[plaintext^=Hakim Ketua]", 0);
					if($Hakim_Ketua == null || $Hakim_Ketua == "")
					{
						$Hakim_Ketua	=	"Not Available";
					}
					else
					{
						$Hakim_Ketua	=	$Hakim_Ketua->next_sibling();
					}
					
					
					//This is for Hakim Anggota	
					$Hakim_Anggota			=	$innerpage->find("//td[plaintext^=Hakim Anggota]", 0);
					if($Hakim_Anggota == null || $Hakim_Anggota == "")
					{
						$Hakim_Anggota	=	"Not Available";
					}
					else
					{
						$Hakim_Anggota	=	$Hakim_Anggota->next_sibling();
					}
					
					//This is for Panitera
					$Panitera			=	$innerpage->find("//td[plaintext^=Panitera]", 0);
					if($Panitera == null || $Panitera == "")
					{
						$Panitera	=	"Not Available";
					}
					else
					{
						$Panitera	=	$Panitera->next_sibling();
					}
					
					
					//This is for Berkekuatan Hukum Tetap	
					$Berkekuatan_Hukum_Tetap			=	$innerpage->find("//td[plaintext^=Berkekuatan Hukum Tetap]", 0);
					if($Berkekuatan_Hukum_Tetap == null || $Berkekuatan_Hukum_Tetap == "")
					{
						$Berkekuatan_Hukum_Tetap	=	"Not Available";
					}
					else
					{
						$Berkekuatan_Hukum_Tetap	=	$Berkekuatan_Hukum_Tetap->next_sibling();
					}
					
					
										$profilelink 				=	$element->href;
					$nomor		 			=	urlencode($nomor);
					$Tingkat_Proses				=	urlencode($Tingkat_Proses); 
					$Tanggal_Register			=	urlencode($Tanggal_Register); 
					$Tahun_Register				=	urlencode($Tahun_Register); 
					$Jenis_Perkara				=	urlencode($Jenis_Perkara); 
					$Klasifikasi				=	urlencode($Klasifikasi); 
					$Sub_Klasifikasi			=	urlencode($Sub_Klasifikasi); 
					$Jenis_Lembaga_Peradilan		=	urlencode($Jenis_Lembaga_Peradilan); 
					$Lembaga_Peradilan			=	urlencode($Lembaga_Peradilan); 
					$Para_Pihak				=	urlencode($Para_Pihak); 
					$Tahun					=	urlencode($Tahun); 
					$Tanggal_Musyawarah			=	urlencode($Tanggal_Musyawarah); 
					$Tanggal_Dibacakan			=	urlencode($Tanggal_Dibacakan); 
					$Amar					=	urlencode($Amar); 
					$Catatan_Amar				=	urlencode($Catatan_Amar); 
					$Hakim					=	urlencode($Hakim); 
					$Hakim_Ketua				=	urlencode($Hakim_Ketua); 
					$Hakim_Anggota				=	urlencode($Hakim_Anggota); 
					$Panitera				=	urlencode($Panitera); 
					$Berkekuatan_Hukum_Tetap		=	urlencode($Berkekuatan_Hukum_Tetap); 
							
		$record = array( 'nomor' =>$nomor, 
		   'Tingkat_Proses' => $Tingkat_Proses,
		   'Tanggal_Register' => $Tanggal_Register, 
		   'Tahun_Register' => $Tahun_Register, 
		   'Jenis_Perkara' => $Jenis_Perkara, 
		   'Klasifikasi' => $Klasifikasi, 
		   'Sub_Klasifikasi' => $Sub_Klasifikasi, 
		   'Jenis_Lembaga_Peradilan' => $Jenis_Lembaga_Peradilan, 
		   'Lembaga_Peradilan' => $Lembaga_Peradilan, 
		   'Para_Pihak' => $Para_Pihak,
		   'Tahun' => $Tahun,
		   'Tanggal_Musyawarah' => $Tanggal_Musyawarah,
		   'Tanggal_Dibacakan' => $Tanggal_Dibacakan,
		   'Amar' => $Amar,
		   'Catatan_Amar' => $Catatan_Amar,
		   'Hakim' => $Hakim,
		   'Hakim_Ketua' => $Hakim_Ketua,
		   'Hakim_Anggota' => $Hakim_Anggota,
		   'Panitera' => $Panitera,
		   'Berkekuatan_Hukum_Tetap' => $Berkekuatan_Hukum_Tetap,
		   'profilelink' 		=>	$element->href);
						
						
           scraperwiki::save(array('nomor','Tingkat_Proses','Tanggal_Register','Tahun_Register','Jenis_Perkara','Klasifikasi','Sub_Klasifikasi','Jenis_Lembaga_Peradilan','Lembaga_Peradilan','Para_Pihak','Tahun','Tanggal_Musyawarah','Tanggal_Dibacakan','Amar','Catatan_Amar','Hakim','Hakim_Ketua','Hakim_Anggota','Panitera','Berkekuatan_Hukum_Tetap','profilelink'), $record);
							
					
					
					
					
					
				}
		}	}	
	}
}
   
	
	  
	  
	  
	  
	



	  
	  
	  
	
	  
?>
