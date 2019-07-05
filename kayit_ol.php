<?php
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$kullanici_adi=$_POST["kullanici_adi"];
$eposta=$_POST["eposta"];
$sifre=$_POST["sifre"];

	$baglanti=mysqli_connect("localhost","root","","veritabani");
	if(mysqli_connect_errno($baglanti)){echo "veritabanı bağlanti hatası". mysqli_connect_error();}

	$varmi=mysqli_num_rows(mysqli_query($baglanti,"select * from uyeler where UYELER_KAD='$kullanici_adi'"));
	if($varmi>0)
	{
		echo "Bu Kullanıcı adı mecvut. Başka Seçiniz.";
		header('Refresh: 3; url=kayit-sayfasi.php');
	}
	else
	{
		$ekle=mysqli_query($baglanti,"insert into uyeler(UYELER_AD,UYELER_SOYAD,UYELER_KAD,UYELER_POSTA,UYELER_SIFRE) values ('$ad','$soyad','$kullanici_adi','$eposta','$sifre')");
		if(isset($ekle))
		{ 
		
			echo "Üye kaydı oluşturuldu"; 
			header('Refresh: 3; url=index.php');
		}
		else { echo "Üye kaydı başarısız";}
	}


mysqli_close($baglanti);

?>