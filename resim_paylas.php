<?php
	
	session_start();
	
	$kad = $_SESSION["kullanici_adi"];		
	$baglanti=mysqli_connect("localhost","root","","veritabani");
	
	// ini_set("display_errors",0);// tarayıcı hata kodlarını göstermemesi için kullanırız
	$aciklama=$_POST["aciklama"];
	$kullaniciadi=$_POST["acikla"];
	$kullanicipp=$_POST["kullanicipp"];
	$dizin="paylasilanlar"; // gelen dosyaların yükleneceği dizin
	
	$gecici_dosya=$_FILES["dosya"]["tmp_name"]; // dosyayı geçiçi olarak tutuyoruz
	$yuklenecek_dosya=$_FILES["dosya"]["name"];
	$izin=array("image/png","image/jpeg","image/jpg","image/gif");
	if(in_array($_FILES["dosya"]["type"],$izin))
	{
	if(move_uploaded_file($gecici_dosya,"$dizin/$yuklenecek_dosya"));
	echo "Dosya başarı ile yüklendi";
			$sql=mysqli_query($baglanti,"insert into paylasilanlar (POST_GORSEL,POST_ACIKLAMA,POST_KAD,POST_PP) values('$dizin/$yuklenecek_dosya','$aciklama','$kullaniciadi','$kullanicipp')");
	}
	else { echo "dosya yukleme hatası: dosya türü hatalı";}
	header("Refresh:3; url=profil.php");
	
?>