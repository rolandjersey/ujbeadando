<?php
// Adatbázis kapcsolat adatai
$servername = "localhost:3306";
$username = "root";
$password = ""; // Állítsd be a jelszót
$dbname = "szeleromuvek";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kapcsolódási hiba ellenőrzése
if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

// Karakterkódolás beállítása
$conn->set_charset("utf8");
