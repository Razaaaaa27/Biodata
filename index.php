<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "biodata";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT nama, npm, nomor_HP, email, alamat, tempat_tanggal_lahir, agama, kewarganegaraan FROM biodata";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li><b>Nama</b> </br>" . $row["nama"]. "</li>";
        echo "<li style='margin-top: 20px'><b>Npm</b> </br>" . $row["npm"]. "</li>";
        echo "<li style='margin-top: 20px'><b>Nomor HP</b> </br>" . $row["nomor_HP"]. "</li>";
        echo "<li style='margin-top: 20px'><b>Email</b> </br>" . $row["email"]. "</li>";
        echo "<li style='margin-top: 20px'><b>Alamat</b> </br>" . $row["alamat"]. "</li>";
        echo "<li style='margin-top: 20px'><b>Tempat Tanggal Lahir</b> </br>" . $row["tempat_tanggal_lahir"]. "</li>";
        echo "<li style='margin-top: 20px'><b>Agama</b> </br>" . $row["agama"]. "</li>";
        echo "<li style='margin-top: 20px'><b>Kewarganegaraaan</b> </br>" . $row["kewarganegaraan"]. "</li>";
    }
} else {
    echo "0 hasil";
}
$conn->close();
?>