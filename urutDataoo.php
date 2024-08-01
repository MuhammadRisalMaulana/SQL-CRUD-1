<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "dboo";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function getParticipants() {
        $sql = "SELECT nama, email FROM participants ORDER BY nama ASC";
        return $this->conn->query($sql);
    }

    public function __destruct() {
        $this->conn->close();
    }
}

$db = new Database();
$result = $db->getParticipants();

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
?>