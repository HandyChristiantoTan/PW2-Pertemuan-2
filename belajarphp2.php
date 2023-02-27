<?php
$namaDepan = "Budi ";
$namaBelakang = "Yantoks";
$umur = 69;
$ipk = 3.69;
$hadir = false;
$sallary = null;

//echo "Nama Lengkap : ". $namaDepan . $namaBelakang;
echo "Nama Lengkap : $namaDepan$namaBelakang";
// echo "Nama Lengkap : $(namaDepan) $(namaBelakang)";
echo "<br>Umur : $umur Tahun";
$umur = 6969;
echo "<br/>";
echo "Umur Sekarang : $umur Tahun";
unset($umur);

define("TEMPATLAHIR", "Palembang");
echo "<br/>";
echo "Tempat Lahir: ". TEMPATLAHIR;

//Variabel Global
/*
1. Session -> $_SESSION['nama']
2. Cookie -> $_COOKIE['namacookie']
3. Post -> $_POST['npm']
4. Get -> $_GET['npm']
5. Server -> $_SERVER[]
*/
?>