<?php
$host = 'localhost'; // Nama hostnya
$username = 'root'; // Username
$password = ''; // Password (Isi jika menggunakan password)
$database = 'loginoop'; // Nama databasenya
$base_url = 'http://localhost/loginoop/'; // Set Base Url Web

// Koneksi ke MySQL dengan MySQLi
$connect = mysqli_connect($host, $username, $password, $database);
?>
