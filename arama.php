<html>
<head>
<link rel="stylesheet" type="text/css" href="css/menu.css" />
</head>
<body>
	<?php
	session_start();
	$kad = $_SESSION["kullanici_adi"];	
	$baglanti=mysqli_connect("localhost","root","","veritabani");
	?>
	<div id="menu">
		<div id="logo">
			<a href="ana.php"><img src="images/newbanner.PNG" width="300" height="100"></a>
		</div>
		
		<form action="arama.php" method="post">
		<div id="orta">
			<div id="ortatext">
				<br><br>	
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;<input class="inputs" type="text" name="aranacak_kelime"  placeholder="Arama">
			</div>
			
		</div>
		<div id="profil">
			<input  type="image" value="Submit" src="images/buton/arama.PNG" width="32" height="32" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="ana.php"><img src="images/buton/anasayfa.PNG" width="40" height="40"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="paylasim.php"><img src="images/buton/paylas.PNG" width="40" height="40"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="profil.php"><img src="images/buton/profil.PNG" width="40" height="40"></a>
		</div>
		</form>
	</div>

	<?php
	if($baglanti->connect_error)
	{
		echo "Baglantı sırasında hata oluştu.";
	}
	$baglanti->set_charset("utf8");
	$aranacak_kelime=$_POST["aranacak_kelime"];
	if(empty($aranacak_kelime))
	{
		echo "<div class='liste'>"; 
		echo "Aranacak kelime boş olamaz.";
		echo "</div>";
	}
	else 
	{
			/*	$sorgu2=mysqli_query($baglanti,"select ARANAN_KAD from paylasilanlar where POST_ID='$aranacak_kelime'");
				while($listele=mysqli_fetch_array($sorgu2))
				{
					echo $sonuc[0];
						$ekle=mysqli_query($baglanti,"UPDATE paylasilanlar SET ARANAN_KAD = '$sonuc[0]' where POST_KAD='$aranacak_kelime' ");
					if(isset($ekle))
					{ 
		
						
						echo "ekLENDİ";
						
						header('Refresh:0.3; url=ana.php');
						
					}
					else 
					{ echo "Beğenilemedi";}
			
				}
		
		
		*/
		$sorgu=$baglanti->query("select * from uyeler  WHERE UYELER_KAD LIKE '%$aranacak_kelime%'");
		while($listele=mysqli_fetch_array($sorgu))
			
		{
			 ?>
			<div class="liste"> 
				<table border="0" cellspacing="0" cellpadding="0">
				<tr><td align="right" width="200" bgcolor="yellow" height="30"><?php echo "@".$listele["UYELER_KAD"]."</td>"."<td bgcolor='yellow'>";
						if($listele["UYELER_KAD"]=="emreyurtseven")
						{
							echo "<img src='images/buton/mavi_tik.PNG' width='20' height='20'>";
						}
						if($listele["UYELER_KAD"]=="erdogangok")
						{
							echo "<img src='images/buton/mavi_tik.PNG' width='20' height='20'>";
						}
						if($listele["UYELER_KAD"]=="berkayayyildiz")
						{
							echo "<img src='images/buton/mavi_tik.PNG' width='20' height='20'>";
						}
				?></td></tr>	
				<tr><td><img src=" <?php echo $listele["UYELER_PP"];?>" width="150" height="150" alt=""/><br /></td>
				<td width="525" valign="top"><br><?php echo $listele["UYELER_BIO"]."<br>"; ?></td>
				</table>
			</div>
			<?php
		}	
	}
	?>
	<div class="clear"></div>
</body>
</html>