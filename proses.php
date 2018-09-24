<?php
session_start();

$dir = "uploads/";
$nama_file = $_FILES["image"]["name"];
$nama_file_tmp = $_FILES["image"]["tmp_name"];
$target_file = $dir.$nama_file;

if (move_uploaded_file($nama_file_tmp, $target_file)) {
	echo "Berhasil Upload";
	header("Location: tampil.php");
}

$user = array(
	"nama" => $_POST["nama"],
	"hobi" => $_POST["hobi"],
	"image" => $target_file
);

$_SESSION["user"] = $user;
?>