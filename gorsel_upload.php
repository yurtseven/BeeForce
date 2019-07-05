<?php
	// ini_set("display_errors",0);// tarayıcı hata kodlarını göstermemesi için kullanırız
	$dizin="uploaded"; // gelen dosyaların yükleneceği dizin
	
	$gecici_dosya=$_FILES["dosya"]["tmp_name"]; // dosyayı geçiçi olarak tutuyoruz
	$yuklenecek_dosya=$_FILES["dosya"]["name"];
	$izin=array("image/png","image/jpeg","image/jpg","image/gif");
	if(in_array($_FILES["dosya"]["type"],$izin))
	{
	if(move_uploaded_file($gecici_dosya,"$dizin/$yuklenecek_dosya"));
	echo "Dosya başarı ile yüklendi";
		$baglanti=mysqli_connect("localhost","root","","veritabani");
		$sql=mysqli_query($baglanti,"insert into uyeler (UYELER_PP) values('$dizin/$yuklenecek_dosya')");
	}
	else { echo "dosya yukleme hatası: dosya türü hatalı";}
	
?>