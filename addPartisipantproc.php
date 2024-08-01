<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "dbpro"; // Nama database yang digunakan

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
die ("Koneksi gagal: " . mysqli_connect_error());
}

// Menyiapkan SQL untuk memasukkan data
$sql = "INSERT INTO participants (nama, email) VALUES ('Anna', 'anna@gmail.com'),
('Budi', 'budi@gmail.com'),
('Citra', 'citra@gmail.com'),
('Dani', 'dani@gmail.com'),
('Eka', 'eka@gmail.com'),
('Fina', 'fina@gmail.com'),
('Gina', 'gina@gmail.com'),
('Hadi', 'hadi@gmail.com'),
('Ika', 'ika@gmail.com'),
('Joko', 'joko@gmail.com'),
('Kiki', 'kiki@gmail.com'),
('Lani', 'lani@gmail.com'),
('Mira', 'mira@gmail.com'),
('Nina', 'nina@gmail.com'),
('Omar', 'omar@gmail.com'),
('Pia', 'pia@gmail.com'),
('Rina', 'rina@gmail.com'),
('Sari', 'sari@gmail.com'),
('Tono', 'tono@gmail.com'),
('Uli', 'uli@gmail.com'),
('Vina', 'vina@gmail.com'),
('Wina', 'wina@gmail.com'),
('Xena', 'xena@gmail.com'),
('Yani', 'yani@gmail.com'),
('Zara', 'zara@gmail.com')";

// Mengeksekusi query
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
echo "Error: ". $sql . "<br>" . mysqli_error ($conn);
}

// Menutup koneksi mysqli_close($conn);
?>