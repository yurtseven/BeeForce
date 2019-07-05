<html>
<head>
<title>BeeForce</title>
<style> 
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
    font: 16px Helvetica, Arial, sans-serif;
    margin: 0 0 10px;
    padding: 15px 10px 15px 10px;
    width: 270px;
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

.btn {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  background: #41b01c;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #117302;
  text-decoration: none;
}
</style> 
</head>
<body>
<form action="giris_yap.php" method="POST">
	<table border="0" align="center">
		<tr>
			<td width="750" height="200" colspan="2" align="center" valign="top" ><img src="images/bannerbee.png" width="600" height="200"></td>
		</tr>
	
		<tr>
			<td width="300" height="550"><img width="350" height="550" src="images/indexphoto.png"></td>
			<td width="450" height="550" valign="top">
				<table align="center" border="0">
	
					<tr>
						<td width="100">Kullanıcı Adı:</td>
						<td width="300"><input class="inputs" type="text" name="kullanici_adi"></td>
					</tr>
	
					<tr>
						<td width="100">Şifre:</td>
						<td width="300"><input class="inputs" type="password" name="sifre"></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input class="btn"  type="submit" id="button1" name="giris" value="Giriş">
							<a href="kayit-sayfasi.php"><input class="btn" type="button" id="button2" name="kayit" value="Kayıt Ol"></a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
				</table>

			</td>
		</tr>
	</table>
</form>
</body>
</html>