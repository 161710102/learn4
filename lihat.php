<!DOCTYPE html>
<html>
<head>
	<title>IDENTITAS</title>
</head>
<body bgcolor="bluesky">


<?php

	require_once 'biodata.php';

$orang1 = new orang('Dheripluim','Pangandaran','17','Exexcutive','Taaruf','Dimana Uwe Milikmah');
//$penjumlahan1-> set_nilai(21,3);
echo"Nama : " .$orang1-> get_nama().'<br>';
echo"Tempat Lahir : " .$orang1-> get_tempatlahir().'<br>';
echo "Umur	: " .$orang1-> get_umur().'<br>';
echo"Kelas : " .$orang1-> get_kelas().'<br>';
echo"Status : " .$orang1-> get_status().'<br>';
echo"Main Di klub : " .$orang1-> get_maen().'<br>'.'<br>';

$orang2 = new orang('DheriMv','Rengasdengklok','18','XI TKJ','Personal','Perserui');
//$penjumlahan1-> set_nilai(21,3);
echo"Nama : " .$orang2-> get_nama().'<br>';
echo"Tempat Lahir : " .$orang2-> get_tempatlahir().'<br>';
echo "Umur	: " .$orang2-> get_umur().'<br>';
echo"Kelas : " .$orang2-> get_kelas().'<br>';
echo"Status : " .$orang2-> get_status().'<br>';
echo"Main Di klub : " .$orang2-> get_maen().'<br>'.'<br>';

$orang3 = new orang('Agung Sugiyanto','Jakarta','17','XI Jasa Boga','Dukatah','Persiba Balikpapan');
//$penjumlahan1-> set_nilai(21,3);
echo"Nama : " .$orang3-> get_nama().'<br>';
echo"Tempat Lahir : " .$orang3-> get_tempatlahir().'<br>';
echo "Umur	: " .$orang3-> get_umur().'<br>';
echo"Kelas : " .$orang3-> get_kelas().'<br>';
echo"Status : " .$orang3-> get_status().'<br>';
echo"Main Di klub : " .$orang3-> get_maen().'<br>'.'<br>';

?>
</body>
</html>