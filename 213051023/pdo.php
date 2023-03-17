<?php

// konfigurasi dari koneksi ke database
$host = "174.138.19.197";
$port = "5432";
$db = "db213051023";
$user = "u213051023";
$pass = "p213051023";

// script koneksi postgree
$pdo = new PDO("pgsql:dbname=$db;host=$host", $user,$pass);

// if ($pdo) {
//     echo "Koneksi telah berhasil, congrats for my self ";
// } else {
//     echo "Gagal melakukan Koneksi, keep spirit";
// }