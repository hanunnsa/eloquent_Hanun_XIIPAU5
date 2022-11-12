<?php

//Aray
$siswa1 = "Ali";
$siswa2 = "Gilang";
$siswa3 = "Esok";

$siswa = array("Ali", "Gilang", "Esok");

$siswa =["Ali", "Gilang", "Esok"];

//echo $siswa[1];
foreach ($siswa as $k => $s) {
    echo ($k+1)."; $s<br> ";
}