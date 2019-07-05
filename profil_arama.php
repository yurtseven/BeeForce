<html>
<head>
<link rel="stylesheet" type="text/css" href="css/profil.css" />
</head>
<body>
	<?php 
		
		session_start();
		$baglanti=mysqli_connect("localhost","root","","veritabani");
		$kad = $_SESSION["kullanici_adi"];
		$aranan=$_SESSION["ara"];

	?>		
	<div id="menu">
		<div id="logo">
			<img src="images/bannerbee.PNG" width="300" height="100">
		</div>
		<div id="orta">
			<div id="ortatext">
				<br><br>	
				<input class="inputs" type="text" name="arama">
			</div>
			<div id="arama">
				<img src="images/buton/arama.PNG" width="25" height="25">
			</div>
		</div>
		<div id="profil">
			<a href="ana.php"><img src="images/buton/anasayfa.PNG" width="40" height="40"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="images/buton/paylas.PNG" width="40" height="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="images/buton/profil.PNG" width="40" height="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="cikis_yap.php"><img src="images/buton/cikis.PNG" width="40" height="40"></a>
		</div>
	</div>
	
	<div id="profil_bio">
		<div id="pp">
			<img src="images/buton/profil.PNG" width="200" height="200">
		</div>
		<div id="ic_bolum">
		<div id="kad">
			<?php echo  "<h2>".$aranan;
			
			?>
		</div>
		<div id="bio">
			<?php	
				$sorgu=mysqli_query($baglanti,"SELECT UYELER_BIO FROM uyeler where UYELER_KAD='$kad' ");
				while($sonuc=mysqli_fetch_row($sorgu))
				{
					echo $sonuc[0];
				}
				?>
		</div>
		<div id="ayarlar">
			<a href="ayarlar.php"><img src="images/buton/ayarlar.png" width="40" height="40"></a>
		</div>
		</div>
	</div>

	<div class="clear"></div>
</body>
</html>