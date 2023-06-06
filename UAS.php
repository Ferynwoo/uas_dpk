<?php

// Menghitung kalori yang dikonsumsi Fu selama perhari dan perminggu

echo "Hitung jumlah kalori perhari dan perminggu jika sekali makan mendapat 2500 kalori. <br> <br>";

$kalori =  2500;


$senin = $kalori * 3;
$selasa = $kalori * 2;
$rabu = $kalori * 2;
$kamis = $kalori * 3;
$jumat = $kalori * 3;
$sabtu = $kalori * 2;
$minggu = $kalori * 1;

echo "Kalori hari senin $senin kalori <br>" ;
echo "Kalori hari selasa $selasa kalori <br>";
echo "Kalori hari rabu $rabu kalori <br>";
echo "Kalori hari kamis $kamis kalori <br>";
echo "Kalori hari jumat $jumat kalori <br>";
echo "Kalori hari sabtu $sabtu kalori <br>";
echo "Kalori hari minggu $minggu kalori <br> <br> <br>";

$total = $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;

echo "Makanan yang dikonsumsi Fu selama seminggu adalah <br>";
echo "sebanyak $total kalori <br><br><br>";

// Menghitung jumlah waktu istirahat Fu

echo "Hitung jumlah waktu tidur perhari dan perminggu <br> Jika sekali waktu tidur butuh 8 jam. <br> <br>";

$JamIstirahat = 8;

$senin = 5;
$selasa = 6;
$rabu = 8;
$kamis = 8;
$jumat = 5;
$sabtu = 6;
$minggu = 4;

echo "Jumlah istirahat Fu selama seminggu adalah ";
$totalistirahat = $senin + + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;
echo "$totalistirahat jam <br> <br>";

// Perhitungan keduanya

// kalori
$totalkalorinormalhari = $kalori * 3;
$totalkalorinormalminggu = $totalkalorinormalhari * 7;

// tidur
$totaltidurnormalhari = 8;
$totaltidurnormalminggu = $totaltidurnormalhari * 7;

echo "Total jumlah kalori selama seminggu untuk sehat adalah $totalkalorinormalminggu kalori <br>";
echo "Dan total tidur selama seminggu yang dibutuhkan untuk sehat adalah $totaltidurnormalminggu jam <br><br>";

echo "Jadi, jika melihat dari kalori yang dikonsumsi dan waktu istirahat yang digunakan <br>";
echo "Fu masih memerlukan waktu istirahat yang cukup";