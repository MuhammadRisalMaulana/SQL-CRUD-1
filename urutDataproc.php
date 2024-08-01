<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "dboo"; // Nama database yang digunakan

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil<br>";

// Menyiapkan SQL untuk mengambil data dari tabel secara urut
$sql = "SELECT nama, email FROM participants ORDER BY nama ASC";
$result = $conn->query($sql);

// Mengecek apakah ada data
if ($result->num_rows > 0) {
    // Menampilkan data
    echo "<table border='1'><tr><th>Nama</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nama"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Menutup koneksi
$conn->close();
?>
