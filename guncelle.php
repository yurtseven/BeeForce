<?php
	
	session_start();
	$kad = $_SESSION["kullanici_adi"];	

	$baglanti=mysqli_connect("localhost","root","","veritabani");
	if(mysqli_connect_errno($baglanti)){echo "veritabanı bağlanti hatası". mysqli_connect_error();}
	
	$ad= $_POST["ad"];
	$soyad = $_POST["soyad"];
	$biyo = $_POST["biyo"];
	$sifre=$_POST["sifre"];
	$posta=$_POST["posta"];


if(empty($posta)){
echo("<center><b>Lütfen Epostanızı giriniz.</b></center>");
}elseif(empty($ad)){
echo("<center><b>Adınızı Yazmadınız.Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($soyad)){
echo("<center><b>Soyadınızı Yazmadınız.Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else{
	$ekle=mysqli_query($baglanti,"UPDATE uyeler SET UYELER_AD = '$ad',UYELER_SOYAD = '$soyad',UYELER_BIO = '$biyo',UYELER_POSTA = '$posta',UYELER_SIFRE = '$sifre' where UYELER_KAD='$kad' ");
	}
if (isset ($ekle)){
echo "Bilgileriniz Güncellenmiştir.";
}
else {
echo "Güncelleme Yapılamadı.";
}
header("Refresh:3; url=profil.php");

?>