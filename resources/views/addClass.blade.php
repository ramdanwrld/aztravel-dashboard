<?php

// koneksi database
include 'koneksiDB.php';

// menangkap sebuah data yang dikirim dari form
$id_paket_wisata = $_POST['id_paket_wisata'];
$nama_paket_wisata = $_POST['nama_paket_wisata'];

var_dump($nama_paket_wisata);

// menginput data ke database
mysqli_query($koneksi, "insert into paket_wisata(nama_paket_wisata) value('$nama_paket_wisata')");

// mengalihkan halaman kembali ke paketWisata.php
header("location:paketWisata.php");

?>