<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Absensi</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <center>
    <h1>Input Absensi</h1>
    <form action="input.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="sift">Sift pagi/sore:</label><br>
        <input type="text" id="sift" name="sift"><br><br>
        <label for="tanggal">Tanggal:</label><br>
        <input type="date" id="tanggal" name="tanggal"><br><br>
        <label for="waktu_masuk">Waktu Masuk:</label><br>
        <input type="time" id="waktu_masuk" name="waktu_masuk"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="index.php">kembali</a>
    </center>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $sift = $_POST['sift'];
        $tanggal = $_POST['tanggal'];
        $waktu_masuk = $_POST['waktu_masuk'];

        $sql = "INSERT INTO data_absen (nama, sift, tanggal, waktu_masuk) VALUES ('$nama', '$sift', '$tanggal', '$waktu_masuk')";
        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil disimpan";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
