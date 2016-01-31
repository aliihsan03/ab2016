<html>
<meta charset="utf-8">
<title>Ödev_1</title>
<body>
<?php 
$ogrencibilgileridizisi=array(
"Ali İhsan Sonugür" => 50,
"Ömer Faruk Alcu"=>60,
"Hasan Aktürk"=>45,
"Erhan Yıldırım"=>67,
"Emin Umutlu"=>98.5);
array_multisort($ogrencibilgileridizisi, SORT_NUMERIC, SORT_DESC);
foreach($ogrencibilgileridizisi as $isim => $notu){
	echo "Adı: ".$isim."  Notu: ".$notu."<br>";	
	
	
}
echo "Notu En Büyük Olan : ".max($ogrencibilgileridizisi)."<br>";
echo "Notu En Küçük Olan : ".min($ogrencibilgileridizisi);

?>
<form method="POST" action="">
<input type="text" name="ad"></input><br>
<input type="text" name="soyad"></input><br>
<input type="Submit" name="buton" value="Gonder"></input>
</form>
<?php echo $_POST["ad"].$_POST["soyad"]; ?>
</body>

</html>
