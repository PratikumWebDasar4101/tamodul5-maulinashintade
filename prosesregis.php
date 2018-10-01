<?php
session_start();
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jk'];
$programStudi = $_POST['program'];
$fakultas = $_POST['fakultas'];
$hobi = $_POST['hobi'];

if (isset($_POST['submit'])) {
	$nim   = isset($_POST['nim']) ? $_POST['nim'] : "";
	$nama  = isset($_POST['nama']) ? $_POST['nama'] : "";
	$jeniskelamin  = isset($_POST['jk']) ? $_POST['jk'] : "";
	$programStudi  = isset($_POST['program']) ? $_POST['program'] : "";
	$fakultas  = isset($_POST['fakultas']) ? $_POST['fakultas'] : "";
	$hobi  = isset($_POST['hobi']) ? $_POST['hobi'] : "";
	$gambar = $_FILES['file_gbr']['name'];
	$gambar_loc = $_FILES['file_gbr']['tmp_name'];
	$folder = "upload/";
	if (move_uploaded_file($gambar_loc, $folder.$gambar)) {
	}
	else{
		echo "Upload Gagal";
	}
	$email = isset($_POST['email']) ? $_POST['email'] : "";	
	}
echo "<h2> Berikut Data Anda </h2>";
echo "<br>";
echo "Nim   : " .$nim;
echo "<br>";
echo "Nama  : " .$nama;
echo "<br>";
echo "Jenis Kelamin  : " .$jeniskelamin;
echo "<br>";
echo "Program Studi  : " .$programStudi;
echo "<br>";
echo "Fakultas  : " .$fakultas;
echo "<br>";
echo "Hobi  : " .$hobi;
echo "<br>";
echo "Gambar  : " ."<img src = '".$folder.$gambar."'>";
echo "<br>";
echo "Email : " .$email;
 ?>
