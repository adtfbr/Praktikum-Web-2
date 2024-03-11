<?php

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jk"];
$prodi = $_POST["prodi"];
$skill = $_POST["skill"];
$domisili = $_POST["domisili"];
$email = $_POST["email"];
$skor = 0;


// Buat logic nentuin skor dari skill
foreach ($skill as $s) {
    // cek skilll nya
    switch ($s) {
        case 'HTML':
            $skor += 10;
            break;
        case 'CSS':
            $skor += 10;
            break;
        case 'Javascript':
            $skor += 20;
            break;
        case 'RWD Bootstrap':
            $skor += 20;
            break;
        case 'PHP':
            $skor += 30;
            break;
        case 'Python':
            $skor += 30;
            break;
        case 'Java':
            $skor += 50;
            break;
        default:
            $skor = 0;
            break;
    }
}


$kategori_skill;
if ($skor >= 100 && $skor <= 150) {
    $kategori_skill = "Sangat Baik";
} elseif ($skor >= 60 && $skor <= 100) {
    $kategori_skill = "Baik";
} elseif ($skor >= 40 && $skor <= 60) {
    $kategori_skill = "Cukup";
} elseif ($skor >= 0 && $skor <= 40) {
    $kategori_skill = "Kurang";
} else {
    $kategori_skill = "Tidak Memadai";
}




?>