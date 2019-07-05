<html>
<head>
</head>
<body>
 <style type="text/css">

   .inputs {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 0 #FFF, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
    -moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
    -ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
    -o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
    box-shadow: 0 1px 0 #FFF, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    background: #EAE7E7;
    border: 1px solid #C8C8C8;
    color: #777;
    font: 13px Helvetica, Arial, sans-serif;
    margin: 0 0 10px;
    padding: 10px 5px 10px 10px;
    width: 400px;
}

.inputs:focus {
    -webkit-box-shadow: 0 0 2px #FFD200 inset;
    -moz-box-shadow: 0 0 2px #FFD200 inset;
    -ms-box-shadow: 0 0 2px #FFD200 inset;
    -o-box-shadow: 0 0 2px #FFD200 inset;
    box-shadow: 0 0 2px #FFD200 inset;
    background-color: #FFF;
    border: 1px solid #FFD200;
    outline: none;
}
#menu
{
	
	width:auto;
	height:100px;
	background-color:White;
	margin:auto;
	padding:0px;
	
	
}
#logo
{
	float:left;
	margin-left:500px;
	
}
#orta
{
	float:center;

}
#profil{
	float:right;
	margin-right:650px;
	margin-top:-73px;
	clear:both;
	
}
  </style>
	<?php
	session_start();
	
	$kad = $_SESSION["kullanici_adi"];		
	$baglanti=mysqli_connect("localhost","root","","veritabani");
	?>
	
	<div id="menu">
		<div id="logo">
			<a href="ana.php"><img src="images/newbanner.PNG" width="300" height="100"></a>
		</div>
		<div id="profil">
			<a href="profil.php"><img src="images/buton/profil.PNG" width="50" height="50"></a>
		</div>
	</div>
	<form action="guncelle.php" method="post" enctype="multipart/form-data">
	<table border="0" align="center">
		<tr>
			<td> </td>
			<td>
				
					
				
			</td>
		</tr>
		<tr>
			<td> Ad : </td>
			<?php	
				$sorgu=mysqli_query($baglanti,"SELECT UYELER_AD FROM uyeler where UYELER_KAD='$kad' ");
				while($sonuc=mysqli_fetch_row($sorgu))
				{
					echo "<td><input class='inputs' type='text' name='ad' value='$sonuc[0]'></td>";
				}
			?>
			
		</tr>
		<tr>
			<td> Soyad  : </td>
			<?php	
				$sorgu=mysqli_query($baglanti,"SELECT UYELER_SOYAD FROM uyeler where UYELER_KAD='$kad' ");
				while($sonuc=mysqli_fetch_row($sorgu))
				{
					echo "<td><input class='inputs' type='text' name='soyad' value='$sonuc[0]'></td>";
				}
			?>
		</tr>
		<tr>
			<td> Biyografi  : </td>
			<?php	
				$sorgu=mysqli_query($baglanti,"SELECT UYELER_BIO FROM uyeler where UYELER_KAD='$kad' ");
				while($sonuc=mysqli_fetch_row($sorgu))
				{
					echo "<td><input class='inputs' type='text' name='biyo' value='$sonuc[0]'></td>";
				}
			?>
		</tr>
		<tr>
			<td> Şifre  : </td>
			<?php	
				$sorgu=mysqli_query($baglanti,"SELECT UYELER_SIFRE FROM uyeler where UYELER_KAD='$kad' ");
				while($sonuc=mysqli_fetch_row($sorgu))
				{
					echo "<td><input class='inputs' type='text' name='sifre' value='$sonuc[0]'></td>";
				}
			?>
		</tr>
		<tr>
			<td> E-Posta  : </td>
			<?php	
				$sorgu=mysqli_query($baglanti,"SELECT UYELER_POSTA FROM uyeler where UYELER_KAD='$kad' ");
				while($sonuc=mysqli_fetch_row($sorgu))
				{
					echo "<td><input class='inputs' type='text' name='posta' value='$sonuc[0]'></td>";
				}
			?>
		</tr>
		<tr>
			<td></td>
			<td><input  type="submit" name="guncelle" value="Güncelle"></td>
		</tr>
	</table>
	</form>
</body>
</html>