<?php
require 'koneksi.php';
$nama_musyrif = $_POST["nama_musyrif"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM db_users 
            WHERE nama_musyrif = '$nama_musyrif' AND password = '$password' ";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: dashboard.php");
} else {
    echo "<center><h1>Nama atau Password Anda Salah. Silahkan Coba Login Kembali.</h1>
            <button><strong><a href='index.html'>Login</a></strong></button></center>";
}
?>