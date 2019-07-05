<?php
	/*session_start();
	$kad = $_SESSION["kullanici_adi"];	*/
	$baglanti=mysqli_connect("localhost","root","","veritabani");
	$begeni_kullanici_adi=$_POST["begeni_kullanici_adi"];
	$sayaccek=mysqli_query($baglanti,"select POST_BEGENI from paylasilanlar where POST_ID='$begeni_kullanici_adi'");
	$begeni_sayac=$sayaccek; // VERİTABANINDAN KOD ÇEKİYORUZ
	
	
				while($sonuc=mysqli_fetch_row($begeni_sayac))
				{
					
					
					if(isset($_POST["begeni_tikla"]))
					{
						$sonuc[0]=$sonuc[0]+1;
						$ekle=mysqli_query($baglanti,"UPDATE paylasilanlar SET POST_BEGENI = '$sonuc[0]' where POST_ID='$begeni_kullanici_adi' ");
					if(isset($ekle))
					{ 
		
						
						echo "<table border='0' align='center'><tr><td>
						
							<img src='images/buton/begenme.png' width='700' height='700'>
							</td></tr></table>";
						
						header('Refresh:0.3; url=profil.php');
						
					}
					else 
					{ echo "Beğenilemedi";}
		
					}
	
					
				}
	
	
	
	
	
	
?>