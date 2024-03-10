<?php 
// 1. Membuat Array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$mahasiswa = ['Sachrul', 3.2, false];
// 2. Mencetak isi Array
// Mencetak 1 nilai pada array, menggunakan index
// index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// Cetak semua isi array
// var_dump() atau print_r()
// digunakan saat debugging

var_dump($hari);
echo "<br>";
print_r($bulan);
echo("<br>");
var_dump($mahasiswa);
echo ("<hr>");


// 3. Memanipulasi Array (menambah atau menghapus)
// Menambah Isi Array
// di akhir: [] atau array_push ()
$hari[] = 'Kamis';
$hari[] = 'Jumat';
print_r($hari);
echo ("<br>");

array_push($bulan, 'April', 'Mei','Juni','Juli','Agustus');
print_r($bulan);
echo("<br>");

// di Awal : Array_unshift()
array_unshift($mahasiswa, '233040036');
print_r($mahasiswa);
echo ("<hr>");

// Menghapus Isi Array
// belakang : array_pop()
// depan : array_shift()

array_pop($hari);
array_shift($bulan);
print_r($hari);
echo ('<br>');
print_r ($bulan);