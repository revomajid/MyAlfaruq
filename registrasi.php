<?php
require 'koneksi.php';

$id = $_POST["id"];
$nama_musyrif = $_POST["nama_musyrif"];
$divisi_musyrif = $_POST["divisi_musyrif"];
$password = $_POST["password"];
$alamat_musyrif = $_POST["alamat_musyrif"];
$notelp_musyrif = $_POST["notelp_musyrif"];

$query_sql ="INSERT INTO db_users(id, nama_musyrif, divisi_musyrif, password, alamat_musyrif, notelp_musyrif) VALUES ('$id', '$nama_musyrif', '$divisi_musyrif', '$password', '$alamat_musryrif', '$notelp_musyrif') ";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
} else { 
    echo "Pendaftaran Gagal! : " . mysqli_error($conn);
}
?>