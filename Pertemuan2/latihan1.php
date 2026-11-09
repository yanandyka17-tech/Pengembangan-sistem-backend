<?php
$nim = "250030082";
$nama = "Andyka";
$kodejurusan = "SI";
$angkatan = 2025;
$umur = 19;
$gender = "Laki-Laki";
$hobi = ["Gaming","Makan","Coding","Membaca novel"];

echo "<h2>Biodata Mahasiswa</h2>";
echo "NIM: $nim <br>";
echo "Nama: $nama <br>";
echo "Kode Jurusan: $kodejurusan <br>";
echo "Angkatan: $angkatan <br>";
echo "Umur: $umur <br>";
echo "Gender: $gender <br>";
echo "Hobi: ". implode(",", $hobi);
?>
