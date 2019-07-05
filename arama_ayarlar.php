<?php
	$baglan=new mysqli("localhost","root","","veritabani");
	if($baglan->connect_error)
	{
		echo "Baglantı sırasında hata oluştu.";
	}
	$baglan->set_charset("utf8");
	
?>