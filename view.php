<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Absensi</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <center>
    <h1>Data Absensi</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Sift</th>
            <th>Tanggal</th>
            <th>Waktu Masuk</th>
        </tr>
        <?php
        $sql = "SELECT * FROM data_absen";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nama"]. "</td><td>" . $row["sift"]. "</td><td>" . $row["tanggal"]. "</td><td>" . $row["waktu_masuk"]. "</td><td>" . $row["waktu_keluar"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found</td></tr>";
        }
        ?>
    </table>
    <a href="index.php">kembali</a>
    </center>
</body>
</html>
