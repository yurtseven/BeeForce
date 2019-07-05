<?php
session_start();

	$kullanici_adi=$_POST["kullanici_adi"];
	$sifre=$_POST["sifre"];
	
	$baglanti=mysqli_connect("localhost","root","","veritabani");
	
	if(mysqli_connect_errno($baglanti)){echo "Veritabanı bağlanti hatası". mysqli_connect_error();}
	$sorgu="select UYELER_KAD,UYELER_SIFRE,UYELER_BIO from uyeler where UYELER_KAD='$kullanici_adi' and UYELER_SIFRE='$sifre'";
	$sonuc=$baglanti->query($sorgu);
	
	if($sonuc->num_rows>0)
	{
	$_SESSION["giris"]="true";
	$_SESSION["kullanici_adi"]=$kullanici_adi;
	$_SESSION["sifre"]=$sifre;
	
	header("Location:ana.php");
	}
	
	else {
		echo "Kullanici adı veya sifre hatalı, yeniden deneyiniz";
		header('Refresh: 3; url=index.php');
	}
	
	mysqli_close($baglanti);
?>