<?php
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
 require 'scraperwiki.php';
 require 'simple_html_dom.php';
//
 $TestURL	=	"https://putusan.mahkamahagung.go.id/putusan/8348c90e77045fecd9b87380232f2119";
$innerpage	=	file_get_html($TestURL);

//This is for Nomor
					$nomor			=	$innerpage->find("//td[plaintext^=Nomor]", 0);
					if($nomor == null || $nomor == "")
					{
						$nomor	=	"Not Available";
					}
					else
					{
						$nomor	=	$nomor->next_sibling();
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
					
					echo 'This is main page URL '.$link.  '<br/>';
					echo 'This is for URL '. '  = > '.$element->href   .  '<br/>';
					echo 'This is for Nomor    '. '  = > '.$nomor  .  '<br/>';
					echo 'This is for Tingkat Proses    '. '  = > '. $Tingkat_Proses  .  '<br/>';
					echo 'This is for Tanggal Register	    '. '  = > '. $Tanggal_Register  .  '<br/>';
					echo 'This is for Tahun Register	    '. '  = > '. $Tahun_Register  .  '<br/>';
					echo 'This is for Jenis Perkara	    '. '  = > '. $Jenis_Perkara  .  '<br/>';
					echo 'This is for Klasifikasi    '. '  = > '. $Klasifikasi  .  '<br/>';
					echo 'This is for Sub Klasifikasi	    '. '  = > '. $Sub_Klasifikasi  .  '<br/>';
					echo 'This is for Jenis Lembaga Peradilan	    '. '  = > '. $Jenis_Lembaga_Peradilan  .  '<br/>';
					echo 'This is for Lembaga Peradilan	    '. '  = > '. $Lembaga_Peradilan  .  '<br/>';
					echo 'This is for Para Pihak	    '. '  = > '. $Para_Pihak  .  '<br/>';
					echo 'This is for Tahun    '. '  = > '. $Tahun  .  '<br/>';
					echo 'This is for Tanggal Musyawarah	    '. '  = > '. $Tanggal_Musyawarah  .  '<br/>';
					echo 'This is for Tanggal Dibacakan	    '. '  = > '. $Tanggal_Dibacakan  .  '<br/>';
					echo 'This is for Amar    '. '  = > '. $Amar  .  '<br/>';
					echo 'This is for Catatan Amar	    '. '  = > '. $Catatan_Amar  .  '<br/>';
					echo 'This is for Hakim    '. '  = > '. $Hakim  .  '<br/>';
					echo 'This is for Hakim Ketua	    '. '  = > '. $Hakim_Ketua  .  '<br/>';
					echo 'This is for Hakim Anggota	    '. '  = > '. $Hakim_Anggota  .  '<br/>';
					echo 'This is for Panitera    '. '  = > '. $Panitera  .  '<br/>';
					echo 'This is for Berkekuatan Hukum Tetap	    '. '  = > '. $Berkekuatan_Hukum_Tetap  .  '<br/>';
					echo '----------------------------------------------------------------------------------------------------'.'<br/>';
	  
?>
