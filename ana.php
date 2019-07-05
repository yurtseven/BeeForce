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
			<img src="images/buton/anasayfa.PNG" width="40" height="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="paylasim.php"><img src="images/buton/paylas.PNG" width="40" height="40"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="profil.php"><img src="images/buton/profil.PNG" width="40" height="40"></a>
		</div>
		</form>
	</div>

	<?php
	$d=mysqli_query($baglanti,("select * from paylasilanlar ORDER BY POST_ID DESC"));
	foreach($d as $m)
			{
				?>
				<div class="liste" align="center">
					
					<table border="0"><tr>
					<?php
					echo "<td>";
						?><img src=" <?php echo $m["POST_PP"];?>" width="27" height="27" alt=""/><br />
						<?php
					echo "</td>";
					echo "<td>";
						echo "<h3>";
						echo $m["POST_KAD"];
					echo "</td>"."<td align='right'>";
						if($m["POST_KAD"]=="emreyurtseven")
						{
							echo "<img src='images/buton/mavi_tik.PNG' width='20' height='20'>";
						}
						if($m["POST_KAD"]=="erdogangok")
						{
							echo "<img src='images/buton/mavi_tik.PNG' width='20' height='20'>";
						}
						if($m["POST_KAD"]=="berkayayyildiz")
						{
							echo "<img src='images/buton/mavi_tik.PNG' width='20' height='20'>";
						}
						echo "</h3>";
					echo "</td>";
					?>
					</tr></table>
					</h3>
					<img src=" <?php echo $m["POST_GORSEL"];?>" width="675" height="500" alt=""/><br />
					<div class="begeni_buton" align="left">
					<table border="0">
					<tr>
						<td width="35">
							<form action="begenme.php" method="post">
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
			}
		?>
		
	<div class="clear"></div>
</body>
</html>