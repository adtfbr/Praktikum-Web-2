<?php

$grade = "A";

$keterangan ="";

switch ($grade) {
    case "A":
        $keterangan = "sangat memuaskan";
        break;
    case "B":
        $keterangan = "memuaskan";
        break;
    case "C":
        $keterangan = "kurang memuaskan";
        break;
    case "D":
        $keterangan = "Tidak memuaskan";
        break;
    default:
        $keterangan = "tidak lulus";
        break;

}

echo "<h1>$keterangan</h1>";

?>