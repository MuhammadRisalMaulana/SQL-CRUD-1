<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "dbpro";

// Membuat koneksi
$conn = new mysqli ($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
die ("Koneksi gagal: " . $conn->connect_error);
}

// Buat tabel
$sql = "CREATE TABLE participants (
    id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR (50) NOT NULL,
    email VARCHAR (50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table participants created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>