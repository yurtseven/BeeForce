<html>
<head>
<link rel="stylesheet" type="text/css" href="css/profil.css" />
</head>
<body>
	<?php 
		$baglanti=mysqli_connect("localhost","root","","veritabani");
		session_start();
		$kad = $_SESSION["kullanici_adi"];

	?>		
	<div id="menu">
		<div id="logo">
			<a href="ana.php"><img src="images/newbanner.PNG" width="300" height="100"></a>
		</div>
		<div id="profil">
			<a href="ana.php"><img src="images/buton/anasayfa.PNG" width="40" height="40"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="paylasim.php"><img src="images/buton/paylas.PNG" width="40" height="40"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="images/buton/profil.PNG" width="40" height="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="cikis_yap.php"><img src="images/buton/cikis.PNG" width="40" height="40"></a>
		</div>
	</div>
	
	<div id="profil_bio">
		<div id="pp">
			<a href="pp_degistir.html">
				<?php	
				$sorgu2=mysqli_query($baglanti,"SELECT UYELER_PP FROM uyeler where UYELER_KAD='$kad' ");
				while($sonuc2=mysqli_fetch_row($sorgu2))
				{
					echo "<img src='$sonuc2[0]' width='200' height='200'>";
				}
				?>
			</a>
		</div>
		<div id="ic_bolum">
		<div id="kad">
			<?php echo  "<h2>@".$kad;
				if($kad=="emreyurtseven")
				{
					echo "<img src='images/buton/mavi_tik.PNG' width='20' height='20'>";
				}
				if($kad=="erdogangok")
				{
					echo "<img src='images/buton/mavi_tik.PNG' width='20' height='20'>";
				}
				if($kad=="berkayayyildiz")
				{
					echo "<img src='images/buton/mavi_tik.PNG' width='20' height='20'>";
				}
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
	
		<?php
		$postkad=mysqli_query($baglanti,"SELECT POST_KAD FROM paylasilanlar");
		
				while($sonuc=mysqli_fetch_row($postkad))
				{
	
					
					if($sonuc[0]==$kad)
					{	
					$d=mysqli_query($baglanti,("select * from paylasilanlar where POST_KAD='$sonuc[0]' ORDER BY POST_ID DESC"));
						while($m=mysqli_fetch_array($d))
						{
		?>
							<div class="liste" align="center">
								<table border="0"><tr><td>
								<h3><?php echo $m["POST_KAD"];?></h3></td><td></td></tr></table>
								<img src=" <?php echo $m["POST_GORSEL"];?>" width="675" height="500" alt=""/><br />
								
								<div class="begeni_buton" align="left">
								<table border="0">
									<tr>
										<td width="35">
										<form action="begenme_profil.php" method="post">
										<input  type="image" value="Submit" src="images/buton/begenme.PNG" width="32" height="32" name="begeni_tikla" />
										<input type="hidden" class="inputs" type="text" name="begeni_kullanici_adi" value="<?php echo $m["POST_ID"]; ?>">
										</form>
									</td>
									<td width="35"><font size="5"><?php echo $m["POST_BEGENI"];?></font></td>
									<td width="605" class="yazi_tur"><?php echo $m["POST_ACIKLAMA"];?></td>
									</tr>
								</table>
								</div>
							</div>
		<?php
						}break;
					}
					
				}

		?>

	<div class="clear"></div>
</body>
</html>