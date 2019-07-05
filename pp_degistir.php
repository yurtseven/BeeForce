<?php
	session_start();
	
	$kad = $_SESSION["kullanici_adi"];		
	$baglanti=mysqli_connect("localhost","root","","veritabani");
	
	// ini_set("display_errors",0);// tarayıcı hata kodlarını göstermemesi için kullanırız
	$dizin="uploaded"; // gelen dosyaların yükleneceği dizin
	
	$gecici_dosya=$_FILES["dosya"]["tmp_name"]; // dosyayı geçiçi olarak tutuyoruz
	$yuklenecek_dosya=$_FILES["dosya"]["name"];
	$izin=array("image/png","image/jpeg","image/jpg","image/gif");
	if(in_array($_FILES["dosya"]["type"],$izin))
	{
	if(move_uploaded_file($gecici_dosya,"$dizin/$yuklenecek_dosya"));
	echo "Dosya başarı ile yüklendi";
		$sql=mysqli_query($baglanti,"UPDATE uyeler SET UYELER_PP = '$dizin/$yuklenecek_dosya' where UYELER_KAD='$kad'");
	}
	else { echo "dosya yukleme hatası: dosya türü hatalı";}
	header("Refresh:3; url=profil.php");
	
?>